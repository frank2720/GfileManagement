<?php

namespace App\Rules;

use Closure;
use App\Models\User;
use App\Models\Member;
use Illuminate\Contracts\Validation\ValidationRule;

class MemberRegistered implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $find_id = User::where('phone',$value)->get('id');
        $user_id = $find_id[0]->id;
        if (Member::where('user_id',$user_id)->exists()) {
            $fail('Phone User already a member');
        }
    }
}
