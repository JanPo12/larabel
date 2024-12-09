<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\JsonResponse;

class PokemonController extends Controller
{
    public function index(): JsonResponse
    {
        $data = Pokemon::with('pokemon_tipus')->with('pokemon_habilitats')->get(); 
        return response()->json(['success' => true, 'data' => $data]);
    }
    public function show($id): JsonResponse
    {
        $data = Pokemon::where('id', '=', $id)->with('pokemon_tipus')->with('pokemon_habilitats')->get();
        return response()->json(['success' => true, 'data' => $data]);
    }
}


