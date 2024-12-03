<?php

return [
    'title' => 'Bienvenue !',
    'subtitle' => 'Inscrivez-vous en saisissant vos informations.',
    'label' => [
        'firstName' => 'Prénom :',
        'lastName' => 'Nom :',
        'birthday' => 'Date de naissance :',
        'phoneNumber' => 'Téléphone :',
        'gender' => 'Genre :',
        'corporation' => 'Société :',
        'email' => 'Email :',
        'password' => 'Mot de passe :',
    ],
    'placeholder' => [
        'firstName' => 'Prénom *',
        'lastName' => 'Nom de Famille *',
        'birthday' => 'Date de Naissance *',
        'phoneNumber' => 'Numéro de Téléphone *',
        'gender' => 'Genre *',
        'corporation' => 'Société',
        'email' => 'Adresse Mail *',
        'password' => 'Mot de Passe *',
    ],
    'submitBtn' => 'S\'inscrire',
    'inputError' => [
        'empty' => 'Champ requis.',
        'date_invalid' => 'La date saisie n\'est pas valide.',
        'phone_invalid' => 'Format de téléphone invalide (+33 xx xx xx xx xx).',
        'email_invalid' => 'Format d\'email invalide (ex : test@test.com).',
        'password_weak' => 'Mot de Passe trop faible (1MAJ, 1min, 1 chiffre)',


        'email_unique' => 'Cet email est déjà utilisé.',
        'password_short' => 'Le mot de passe doit contenir au moins :min caractères.',
        'phone_unique' => 'Ce numéro de téléphone est déjà utilisé.',
        'gender_required' => 'Veuillez sélectionner un genre.',
        'birthday_past' => 'La date de naissance doit être dans le passé.',
        'corporation_long' => 'Le nom de la société est trop long.',
        'input_too_long' => 'La saisie dépasse la limite autorisée de :max caractères.',
        'input_too_short' => 'La saisie doit comporter au moins :min caractères.',
        'invalid_choice' => 'L\'option sélectionnée n\'est pas valide.',
    ],
    'select' => [
        '1' => 'Homme',
        '2' => 'Femme',
    ],
    // Code
    'switchForm' => 'Se Connecter',
    'activateCode' => 'Pour activer votre compte taper le code reçu par mail',
    'noCode' => 'Voud n\'avez pas reçu de code ?',
    'submitCode' => 'Confirmer',
];
