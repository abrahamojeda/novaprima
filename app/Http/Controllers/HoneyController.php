<?php

namespace App\Http\Controllers;

class HoneyController extends Controller
{
    public function store(Request $request)
    {
        $honey = new Honey();
        $honey->save();
        return 'Saved';
    }
}
