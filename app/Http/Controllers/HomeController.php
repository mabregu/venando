<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        # code...
        $type = Type::get();

        return view('home', compact('type'));
    }

    public function trade_conditions() {
        return view('trade_conditions');
    }

    public function datapolitics() {
        return view('datapolitics');
    }

}
