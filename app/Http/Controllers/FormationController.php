<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function indexFor(){
       $forma = Formation::all();
       return view('liste_formations',['forma'=>$forma]);
    }
}
