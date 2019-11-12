<?php

namespace App\Http\Controllers;

use App\User;
use App\Restaurant;
use App\Taste;
use Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $items = Restaurant::orderBy('id', 'desc')->get();


        return view(
            '/index',
            [
                'items' => $items,

            ]
        );
    }

    public function search(Request $request)
    {

        $keyword = $request->input('search');
        $items = Restaurant::where('name', 'like', '%' . $keyword . '%')
            ->get();
        return view(
            '/index',
            ['items' => $items]
        );
    }

    public function mypage(Request $request)
    {
        $user_id = Auth::id();
        $items = Restaurant::where('user', $user_id)->get();
        return view(
            '/index',
            ['items' => $items, 'user_id' => $user_id]
        );
    }

    public function edit($id)
    {
        $items = Restaurant::where('id', $id)->first();

        return view(
            '/edit',
            ['items' => $items]
        );
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/index');
    }

    public function unsubscribe()
    {
        return view(
            '/unsubscribe'
        );
    }
}
