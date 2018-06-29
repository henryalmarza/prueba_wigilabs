<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;

class ArticuloController extends Controller
{
    public function index()
    {
        return response()->json(Articulo::all());
    }}
