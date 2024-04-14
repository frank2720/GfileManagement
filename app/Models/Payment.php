<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'trcode',
    ];

     /**
     * Get the member that owns the transaction
     */

     public function member():BelongsTo
     {
         return $this->belongsTo(Member::class, 'user_id');
     }
}
