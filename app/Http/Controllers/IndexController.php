<?php

namespace App\Http\Controllers;

use App\Services\Jokestar;
use Laravel\Lumen\Routing\Controller;

class IndexController extends Controller
{
    public function handle()
    {
        return view('index', [
            'joke' => Jokestar::random()[0],
        ]);
    }
}
