<?php

namespace App\Http\Controllers;

class ApiController
{
    public function getProfile(){
        $userId = request('user_id');
        $user = User::find($userId);
        return $user;
    }
}
