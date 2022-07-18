<?php

namespace App\Http\Controllers\Api;
use App\Pizza;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PizzasController extends Controller
{
    public function index(){
        $pizze = Pizza::with('ingredients')->get();

        return response()->json($pizze);
    }
}
