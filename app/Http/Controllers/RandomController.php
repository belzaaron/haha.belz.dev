<?php

namespace App\Http\Controllers;

use App\Services\Jokestar;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class RandomController extends Controller
{
    public function handle(Request $request)
    {
        return response()->json([
            'jokes' => Jokestar::random($request->input('number', 1)),
        ]);
    }
}
