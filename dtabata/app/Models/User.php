<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes,HasRoles;
    protected $fillable = [
        'name',
        'user_name',
        'email',
        'phone',
        'password',
    ];
    protected $primaryKey = 'user_id';

    public function weights(){
        return $this ->hasMany(Weight_history::class ,'user_id','user_id');
    }
}
