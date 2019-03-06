<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    public function store(Request $request)
    {
        $provider = new Provider();
        $provider->save();
        return 'Saved';
    }
}
