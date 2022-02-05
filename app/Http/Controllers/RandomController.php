<?php

namespace App\Http\Controllers;

use App\Services\Jokestar;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class RandomController extends Controller
{
    public function handle(Request $request)
    {
        $this->validate($request, [
            'number' => 'nullable|sometimes|filled|numeric|integer|gt:0|lte:'.Jokestar::count(),
        ]);

        return response()->json([
            'jokes' => Jokestar::random($request->input('number', 1)),
        ]);
    }
}
