<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLoginController extends Controller
{
    public function checkLoggedIn(Request $request) {
        dd("Test");
        if (Auth::check()) {
            $user = Auth::user();
            return response()
                ->json([
                    'logged_in' => true,
                    'user_id' => $user->id,
                    'name' => $user->name,
                ], 200);
        } else {
            return response()
                ->json([
                    'logged_in' => false,
                ], 200);
        }
    }
}
