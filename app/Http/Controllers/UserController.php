<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use  Model;
use App\User;
//Use Resources to convert into json
use app\Http\Resources\UserResource as UserResource;
class UserController extends Controller
{
    public function getusers()
    {
        $users = User::get();
        return UserResource::collection($users);
    }
}