<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use App\Taste;
use App\Restaurant;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $tastes = Taste::get();

        return view(
            'post',
            ['tastes' => $tastes]
        );
    }

    public function create(Request $request)
    {
        $user_id = Auth::id();
        $picName = rand() . $_FILES['pic']['name'];
        $request->file('pic')->storeAs('public', $picName); //写真の保存
        $request->validate([
            'name'  => 'required|max:20',
            'pic' => 'required',
            'address' => 'required',
        ]);
        $name = $request->input('name');
        $address = $request->input('address');
        $pic = $picName;
        $taste = $request->input('taste');
        $text = $request->input('introduction');
        $user = $user_id;
        $created_at = now();
        $updated_at = now();
        Restaurant::insert([
            'name' => $name,  "address" => $address, "pic" => $pic,
            "taste_key" => $taste, 'introduction' => $text, 'user' => $user_id,
            "created_at" => $created_at, "updated_at" => $updated_at
        ]);
        return redirect('/index');
    }
}
