<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request) {
        $user = $request->all();
        $user_info = User::create($user);
        return $user;
    }

    public function index() {
        $user = User::all();
        return $user;
    }
}
