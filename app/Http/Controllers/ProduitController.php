<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        return view('produits.index');
    }


    public function create()
    {
        return view('produits.create');
    }
}
