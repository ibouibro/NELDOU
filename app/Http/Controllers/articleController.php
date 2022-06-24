<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class articleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $objets= DB::table('produit')->get();
        return view('staff/article/index')->with(['categories' => $objets, 'count' => count($objets)]);
    }

    public function ajouter(Request $request)
    {
            $nom = $request->input("nom");
            $exists =  DB::table('produit')->where(['nom' => $nom ])->value('nom');
            if($exists!=null)
             
            return view('staff/article/index')->with(['categories' => $objets= DB::table('produit')->get(), 'count' => count($objets)]);
    
            DB::table('produit')->insert(['nom' => $nom ]);
            return view('staff/article/index')->with(['categories' => $objets= DB::table('produit')->get(), 'count' => count($objets)]);
      
    }

    public function supprimer(Request $request)
    {
            $nom = $request->input("id");
           $o= DB::table('produit')->where('id',$nom)->delete();
            
            $objets= DB::table('produit')->get();
            return view('staff/article/index')->with(['categories' => $objets, 'count' => count($objets)]);
      
    }



}
