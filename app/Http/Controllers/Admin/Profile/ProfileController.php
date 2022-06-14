<?php

namespace App\Http\Controllers\Admin\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    public function myProfile() {
        $id   = Auth::user()->id;
        $user = user::find($id);
        // $role = $user->roles_name;
        $userRole   = $user->roles->pluck('name','name')->all();
        return view('profile.my-profile' , compact('user' , 'userRole') );
    }
}
