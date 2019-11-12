<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UnsubscribeController extends Controller
{
    public function __invoke(Request $request)
    {
        $user_name = $request->input('user_name');
        //$user_pass = Hash::make($request->input('pass'));
        $user_id = Auth::id();
        User::where('id', $user_id)
            ->where('name', $user_name)
            ->delete();
        return redirect('/index');
    }
}
