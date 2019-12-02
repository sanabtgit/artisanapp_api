<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
class categorieController extends Controller
{
    public function index()
    {
        return response()->json(categories::get(),200);
    }
}
