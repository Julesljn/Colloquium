<?php

return [
    'title' => 'Welcome !',
    'subtitle' => 'Sign up by entering your information.',
    'label' => [
        'firstName' => 'First Name:',
        'lastName' => 'Last Name:',
        'birthday' => 'Date of Birth:',
        'phoneNumber' => 'Phone Number:',
        'gender' => 'Gender:',
        'corporation' => 'Company:',
        'email' => 'Email:',
        'password' => 'Password:',
    ],
    'placeholder' => [
        'firstName' => 'First Name *',
        'lastName' => 'Last Name *',
        'birthday' => 'Date of Birth *',
        'phoneNumber' => 'Phone Number *',
        'gender' => 'Gender *',
        'corporation' => 'Corporation',
        'email' => 'Email Address *',
        'password' => 'Password *',
    ],
    'submitBtn' => 'Sign up',
    'inputError' => [
        'empty' => 'Field is required.',
        'date_invalid' => 'The entered date is invalid.',
        'phone_invalid' => 'Invalid phone format (+33 xx xx xx xx xx).',
        'email_invalid' => 'Invalid email format (e.g., test@test.com).',
        'password_weak' => 'Password is too weak (1UPPER, 1lower, 1 number).',

        'email_unique' => 'This email is already in use.',
        'password_short' => 'The password must be at least :min characters long.',
        'phone_unique' => 'This phone number is already in use.',
        'gender_required' => 'Please select a gender.',
        'birthday_past' => 'The birthdate must be in the past.',
        'corporation_long' => 'The company name is too long.',
        'input_too_long' => 'The input exceeds the maximum allowed limit of :max characters.',
        'input_too_short' => 'The input must be at least :min characters long.',
        'invalid_choice' => 'The selected option is invalid.',
    ],

    'select' => [
        '1' => 'Man',
        '2' => 'Woman',
    ],
    // Code
    'switchForm' => 'Log In',
    'activateCode' => 'Please activate your account by entering the code you received via email.',
    'noCode' => 'Didn\'t receive a code?',
    'submitCode' => 'Confirm',
];
