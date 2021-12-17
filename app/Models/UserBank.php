<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBank extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_name',
        'account_no',
        'account_name',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
