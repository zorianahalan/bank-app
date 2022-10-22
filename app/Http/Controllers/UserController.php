<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(Request $request) {
        return $request->user();
    }

    public function cards() {
        return response()->json(auth()->user()->cards,200);
    }
}
