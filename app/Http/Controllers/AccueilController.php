<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AccueilController extends Controller
{
    public function index(){
        return View("accueil.index");
    }
}
