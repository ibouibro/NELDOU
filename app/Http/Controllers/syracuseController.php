<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class syracuseController extends Controller
{
    //

    public function calculer(Request $request)
    {

        $nombre = $request->input("nombre");
        
        if($nombre==null)
            $nombre=712;
        

        $liste = array();
        while($nombre > 4)
        { 
            $nombre2 = $nombre;
            $puissance =0;
            while($nombre % 2 == 0)
            {
                $puissance = $puissance +1;
                $nombre = $nombre/2;
            }

        
        $valeur= array('indice' => 0,'nombre' => $nombre2, 'puissance' => $puissance, 'somme' => null, 'resultat' => null );
        array_push($liste, $valeur);
        
        $nombre = $nombre * 3 + 1;

        }

    $j=0;
    $taille = count($liste);
    $somme =0;
    for($j=0; $j < $taille; $j++)
    {
           $liste[$j]['indice']= $taille;
           
           $somme= $somme + $liste[$taille-1]["puissance"];
           $liste[$taille]["somme"]=$somme;
           $taille=$taille - 1;
    }

   

   
    return view('syracuse')->with( [
        'liste' => $liste    
    ]); 
}
}
