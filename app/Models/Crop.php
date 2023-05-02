<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Crop extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'duration',
        'acrerange',
        'note',
    ];
    
    public function user() {
        $this->belongsTo(User::class);
    }
}