<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $liste = Menu::query()->orderBy('active')->get();

        return view('test', [
            'liste' => $liste
        ]);
    }
}
