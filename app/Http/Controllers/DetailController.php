<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id)
    {
        $items = Restaurant::where('id', $id)->first();

        return view('detail', ['items' => $items]);
    }
}
