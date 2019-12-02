<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produits;
class produitController extends Controller
{
    public function index($idcat)
    {
      //  return response()->json(produits::get(),200);
      return response()->json(Produits::where('categorie_id',$idcat)->get(), 200);
    }
}
