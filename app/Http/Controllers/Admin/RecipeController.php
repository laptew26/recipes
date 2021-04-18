<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    public function index(){
        return view('admin.recipes', [
            'recipes' => Recipe::paginate(50),
        ]);
    }
}
