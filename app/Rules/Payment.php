<?php

namespace App\Rules;

use Closure;
use App\Models\Payment;
use Illuminate\Contracts\Validation\ValidationRule;

class PaymentExist implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check if the value exists in the payments table
        if (!Payment::where('payment_field', $value)->exists()) {
            $fail("The selected payment does not exist.");
        }
    }
}
