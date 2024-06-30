<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'username_or_email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $credentials = [];

        if (filter_var($this->username_or_email, FILTER_VALIDATE_EMAIL)) {
            $credentials = [
                'email' => $this->username_or_email,
                'password' => $this->password,
            ];
        } else {
            $credentials = [
                'username' => $this->username_or_email,
                'password' => $this->password,
            ];
        }

        if (! \auth()->attempt($credentials)) {
            throw ValidationException::withMessages([
                'username_or_email' => trans('auth.failed'),
            ]);
        }
    }
}
