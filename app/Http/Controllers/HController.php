<?php


namespace App\Http\Controllers;

SESSION_START();

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Auth;

class HController extends Controller
{
    public function home()
    {
        // on cherche les id des publications de l'authentifié et on retourne ses commandes

        $ids = DB::table('publicaton')->where('user',Auth::id())->pluck('id')->all();
        
       
        $com = DB::table('commande')->where('etat',0)->whereIn('publication',$ids)->get();
            $ventes = DB::table('commande')->where('etat',1)->whereIn('publication',$ids)->get();
            
            
            return view('homex')->with([  'com' => count($com), 'ventes' => count($ventes) ]);
  
    }


 /*   public function token()
    {
        $s = new Session();
        $id = $s->id;
        $token =  DB::table('connexion')->where('id',$id)->value('token');
           
        return view('staff/token')->with(['token' => $token ]);
    }
    */

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function connecter()
    {

           $ids  = DB::table('publicaton')
           ->where('user',Auth::id())->pluck('id')->all();

            $com = DB::table('commande')
            ->where('etat',0)
            ->whereIn('publication',  $ids)->get();

            $ventes = DB::table('commande')
            ->where('etat',1)
            ->whereIn('publication',$ids)->get();
            
            
            return view('homex')->with([  'com' => count($com), 'ventes' => count($ventes) ]);
  
        
    }

   
/*
    public function deconnecter()
    {
      Auth::logout();
        
        return view('welcome');
    }
    */
}
