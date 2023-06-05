<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaundryController extends Controller
{
    public function create()
    {
        return view('laundry.add-laundry');
    }
}
