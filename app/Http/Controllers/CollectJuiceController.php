<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectJuiceController extends Controller
{
    public function store(Request $request)
    {
        $collectJuice = new CollectJuice();
        $collectJuice->save();
        return 'Saved';
    }
}
