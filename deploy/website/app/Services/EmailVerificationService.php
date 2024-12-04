<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmailVerificationService
{
    public function verifyCode($codeArray)
    {
        if (count($codeArray) !== 6 || in_array(null, $codeArray, true) || in_array('', $codeArray, true)) {
            return ['error' => 'Veuillez remplir tous les champs du code.'];
        }

        $code = implode('', $codeArray);

        if (!preg_match('/^\d{6}$/', $code)) {
            return ['error' => 'Le code doit être un nombre à 6 chiffres.'];
        }

        $user = Auth::user();

        if ($user->email_verification_code === $code && now()->lessThanOrEqualTo($user->email_verification_expires_at)) {
            $user->email_verified_at = now();
            $user->email_verification_code = null;
            $user->email_verification_expires_at = null;
            $user->save();

            return ['success' => 'Le code est valide et le compte est activé.'];
        }

        return ['error' => 'Le code est invalide ou a expiré.'];
    }
}
