<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
   {
    $comics= Comic::all()->take(4);
    return view('welcome',compact('comics'));
   }
}
