<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmailCode;
use App\Http\Requests\StoreUserRequest;
use Auth;

class UserController extends Controller
{
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
        $codeArray = $request->input('code');

        if (count($codeArray) !== 6 || in_array(null, $codeArray, true) || in_array('', $codeArray, true)) {
            return back()->withErrors(['code' => 'Veuillez remplir tous les champs du code.']);
        }

        $code = implode('', $codeArray);

        if (!preg_match('/^\d{6}$/', $code)) {
            return back()->withErrors(['code' => 'Le code doit être un nombre à 6 chiffres.']);
        }

        $user = Auth::user();

        if ($user->email_verification_code === $code && now()->lessThanOrEqualTo($user->email_verification_expires_at)) {
            $user->email_verified_at = now();
            $user->email_verification_code = null;
            $user->email_verification_expires_at = null;
            $user->save();

            return redirect()->route('home');
        } else {
            return back()->withErrors(['code' => 'Le code est invalide ou a expiré.']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
