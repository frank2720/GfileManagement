<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MonthlyContribution extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'amount',
        'trcode',
    ];

    /**
     * Get the member that owns the monthly contributions
     */

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
