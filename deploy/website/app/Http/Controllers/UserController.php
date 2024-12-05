<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Mail\VerifyEmailCode;
use App\Models\User;
use App\Services\EmailVerificationService;
use App\Services\CodeRegisterGeneratorService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
class UserController extends Controller
{
    protected $verificationService;
    protected $codeGenerator;

    public function __construct(EmailVerificationService $verificationService, CodeRegisterGeneratorService $codeGenerator)
    {
        $this->verificationService = $verificationService;
        $this->codeGenerator = $codeGenerator;
    }

    public function store(StoreUserRequest $request)
    {
        $verificationCode = $this->codeGenerator->generate();

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birthday' => $request->birthday,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'corporation' => $request->corporation,
            'email_verification_code' => $verificationCode,
            'email_verification_expires_at' => now()->addMinutes(30),
        ]);

        Mail::to($user->email)->send(new VerifyEmailCode($verificationCode));
        Auth::login($user);
        return redirect()->route('verification.code');
    }

    public function showVerificationForm()
    {
        return view('verificationCode');
    }

    public function verify(Request $request)
    {
        $result = $this->verificationService->verifyCode($request->input('code'));

        if (isset($result['error'])) {
            return back()->withErrors(['code' => $result['error']]);
        }

        return redirect()->route('home')->with('success', $result['success']);
    }

    public function resetVerifCode()
    {
        $user = Auth::user();

        $newVerificationCode = $this->codeGenerator->generate();

        $user->update([
            'email_verification_code' => $newVerificationCode,
            'email_verification_expires_at' => now()->addMinutes(30),
        ]);

        Mail::to($user->email)->send(new VerifyEmailCode($newVerificationCode));

        return redirect()->route('verification.code');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function login(LoginUserRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->withErrors([
            'login' => __('login.inputError'),
        ])->withInput();
    }
}
