<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getusers()
    {
        $users = User::get();
        return UserResource::collection($users);
    }
}
