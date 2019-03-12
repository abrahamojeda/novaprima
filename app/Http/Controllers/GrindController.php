<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrindController extends Controller
{
    public function store(Request $request)
    {
        $grind = new Grind();
        $grind->save();
        return 'Saved';
    }
}
