<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    public function store(Request $request)
    {
        $responsable = new Responsable();
        $responsable->save();
        return 'Saved';
    }
}
