<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;
use App\Http\Controllers\ApprenantController;

class ApprenantController extends Controller
{
    public function index(){
        // return Apprenant::all();
        // Apprenant est une classe qui herite des fonctionnalites de Model (HasFactory)
        $liste=Apprenant::all();
        return view('liste_apprenants',['liste' =>$liste] ); 
   
}
}
