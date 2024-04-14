<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'fee',
    ];

    /**
     * Get the user that owns the registration fee
     */

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
