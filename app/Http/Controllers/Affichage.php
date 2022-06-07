<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class Affichage extends Controller
{
    public function PageInsClient(){
        return view("p_inscrire_client");
    }

     public function PageInsVendeur(){
        return view("p_inscrire_vendeur");
    }

    public function PageLoginClient(){
        return view("login_client");
    }

    public function PageLoginVendeur(){
        return view("login_vendeur");
    }

    public function PageLoginAdmin(){
        return view("login_admin");
    }
    

     public function PageHome(){
        return view("p_home");
    }
    
     public function PageAjouterMaterieles(){
        return view("addmatreils");
    }

     public function PageProfilAdmin(){
        return view("p_profil_admin");
    }

     public function InsClient(Request $Request){


        Client :: create ([
      'nom_c'=> $Request->nom_c,
       'prenom_c'=> $Request->prenom_c ,
       
   ]);
        return 'save'; 
    }
}
