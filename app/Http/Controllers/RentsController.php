<?php

namespace App\Http\Controllers;
use App\Models\Rents;

class RentsController extends Controller
{
    public function index()
    {
        $rents = Rents::all();
        return view('rents.index', ['rents' => $rents]);
    }
}
