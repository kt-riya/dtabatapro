<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\Weight_history;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    public function homePage(){
        return view ('welcome');
}

public function userPage(){
    $users = User::latest()->limit(10)->get();
    $roles = Role::all();

    return view ('users.user',compact('users','roles'));
}

public function addPage(){
    return view ('users.adduser');
}

public function savePage(){
    
    $user = User::updateOrCreate(
        [
            'email'=> request('email'),
            'password' => Hash::make(request('password')),
        ],
    [
        'user_name' => request('name'),
        'phone' => request('phone'), 
    ]);

    $user->assignRole(request('role'));
    return redirect()->route('user')->with('message','User Added');
}
public function editPage($user_id ){
    $user = user::find($user_id );
    $roles = Role::all();
    return view ('users.edituser',compact('user','roles'));
}

public function updateUser(){
    $user_id = (request('id'));
    $user = User::find($user_id);
    $user->update([
        'user_name' => request('name'),
        'email' => request('email'),
        'phone' =>request('phone'),

    ]);
    return redirect()->route('user')
            ->with('message','updated successfullyyyyy');
}

public function deleteUser($user_Id){
    User::find($user_Id)->delete();

    return redirect()->route('user')
            ->with('message','DELETED successfullyyyyy');

}

public function viewDeletedUser(){
    $users = user::onlyTrashed()->get();
    return view ('users.view_deleted_users',compact('users'));
}

public function activateUser($user_Id){
    $user = User::onlyTrashed()->find($user_Id);
    $user->restore();
    return redirect()->route('view.deleted.user');

}

public function changeRole() {
    $user = User::find(request('id'));
    $user_id = (request('id'));
    $user = User::find($user_id);
    $user->update([
        'password' => Hash::make(request('password')),
    ]);

    $roles = Role::all();
    if ($user) {
        if (isset($user->roles[0])) {
            $user->removeRole($user->roles[0]->name);
        }
        $user->assignRole(request('role'));
        }
        return redirect()->route('user');

}

public function userWeight() {
    return view ('users.edit.weight');
}

public function saveWeight(){
    $roles = Role::all();
    $user_id = (request('id'));
    $user = User::find($user_id);
    

    weight_history::Create([
        'weight_kg' =>request('weight-kg'),
        'weight_lbs' =>request('weight-lbs'),
        'user_id' =>request('id'),
    ]);
    return view ('users.edituser',compact('user','roles'));

}

public function test(){
    $users = User::all();
    return response()->json ([
        'status' => 200,
        'users' => $users
    ],200);
}

public function list(){
    $employees = Employee::all();
    return view ('list', compact('employees')); 
}
}