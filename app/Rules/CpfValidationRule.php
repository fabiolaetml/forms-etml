<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CpfValidationRule implements Rule
{
    public function passes($attribute, $value)
    {
        // Verifica se o CPF possui 11 dígitos
        return strlen($value) == 11;
    }

    public function message()
    {
        return 'O CPF deve conter 11 dígitos.';
    }
}
