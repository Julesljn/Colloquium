<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'phone' => 'required|string|unique:users,phone',
            'gender' => 'required|in:male,female',
            'corporation' => 'nullable|string|max:255',
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => __('register.inputError.empty'),
            'first_name.max' => __('register.inputError.input_too_long', ['max' => 255]),
            'last_name.required' => __('register.inputError.empty'),
            'last_name.max' => __('register.inputError.input_too_long', ['max' => 255]),
            'email.required' => __('register.inputError.empty'),
            'email.email' => __('register.inputError.email_invalid'),
            'email.unique' => __('register.inputError.email_unique'),
            'password.required' => __('register.inputError.empty'),
            'password.min' => __('register.inputError.password_short', ['min' => 6]),
            'password.regex' => __('register.inputError.password_weak'),
            'birthday.required' => __('register.inputError.empty'),
            'birthday.date' => __('register.inputError.date_invalid'),
            'birthday.before' => __('register.inputError.birthday_past'),
            'phone.required' => __('register.inputError.empty'),
            'phone.regex' => __('register.inputError.phone_invalid'),
            'phone.unique' => __('register.inputError.phone_unique'),
            'gender.required' => __('register.inputError.gender_required'),
            'corporation.max' => __('register.inputError.corporation_long', ['max' => 255]),
        ];
    }
}
