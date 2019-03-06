<?php

namespace App\Http\Controllers;

class TomatoesController extends Controller
{
    public function store(Request $request)
    {
        $tomatoe = new Tomatoe();
        $tomatoe->save();
        return 'Saved';
    }
}
