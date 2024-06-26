<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'fee',
        'trcode',
    ];

    /**
     * Get the user that owns the registration fee
     */

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function monthly():HasMany
    {
        return $this->hasMany(MonthlyContribution::class, 'member_id');
    }
}
