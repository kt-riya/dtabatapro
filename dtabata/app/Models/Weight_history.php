<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight_history extends Model
{
    use HasFactory;
    protected $fillable = [
        'weight_id',
        'user_id',
        'weight_kg',
        'weight_lbs',
    ];
    protected $primaryKey = 'user_id';
}
