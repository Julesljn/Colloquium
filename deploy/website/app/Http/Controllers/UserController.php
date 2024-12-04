<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Mail\VerifyEmailCode;
use App\Models\User;
use App\Services\EmailVerificationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    protected $verificationService;

    public function __construct(EmailVerificationService $verificationService)
    {
        $this->verificationService = $verificationService;
    }

    public function store(StoreUserRequest $request)
    {
        $verificationCode = random_int(100000, 999999);

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

        return redirect()->route('verification.code')->with('success', 'Un email de vérification vous a été envoyé.');
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


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
