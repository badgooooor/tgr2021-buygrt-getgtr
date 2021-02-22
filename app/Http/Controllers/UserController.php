<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Get all member
    public function index() {
        return User::all();
    }

    // Get specific member by name
    public function show($name) {
        return DB::table('users')
            ->where('name', $name)->get();
    }
}
