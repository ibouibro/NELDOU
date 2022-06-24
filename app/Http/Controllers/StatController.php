<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StatController extends Controller
{
    private $Mois = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");

    public function index()
    {
       return view("statistiques/index")
        ->with(['Mois' => $Mois
        ,  'categories' =>  DB::table('produit')->value('nom')
         ]);
    }

    public function getStatData(Request $request)
    {
        $annee= $request->input('annee');
        $mois= $request->input('mois');
        $cat= $request->input('categorie');
        return view("statistiques/index")
        ->with(['Mois' => $Mois
        ,  'categories' =>  DB::table('produit')->value('nom'),
        'stats' =>  DB::table('publication')->join('commande')->on()->value('nom')
         ]);
    }
}
