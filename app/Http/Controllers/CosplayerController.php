<?php

namespace App\Http\Controllers;

use App\Models\Cosplayer;

class CosplayerController extends Controller
{
    public function index()
    {
        $cosplayers = cosplayer::all();
        return view('cosplayers.index', ['cosplayers' => $cosplayers]);
    }
}

