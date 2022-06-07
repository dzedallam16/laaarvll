<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vendeur;
use App\Models\vndr;

class crudControle extends Controller
{
   

  public function  ajouterVendeur(Request $request){

    $V = new vendeur();
    $V->nom_v =  $request->input('nom_vendeur');
    $V->prenom_v =  $request->input('prenom_vendeur');
    $V->num_v =  $request->input('num_vendeur');
    $V->email_v =  $request->input('email_vendeur');
     $V->mdps_v =  $request->input('mdps_vendeur');
    

    $V->save();
        
     return redirect('page_inscrire_vendeur');
    }

 function gestion_vendeurs() {
          
    $data= vendeur::all();

          return  view('gestion_vendeurs', compact('data'));
    }

function formulaire_modifier_vendeur( $id) {
          
          $V = vendeur::find($id);
        
         if ($V!= null)  
            return  view('p_modifierVendeur',compact('V'));
         else
            return redirect('gestion_vendeurs');
    }

function modifierVendeur(Request $request) {
    
   
        
    $id= $request->input('id');   // Récupérer le "id" de l'étudiant
    
    $V = vendeur::find($id);  //Rechercher l'étudiant per son "id"
    
    $V->nom_v =  $request->input('nom_vendeur');
    $V->prenom_v =  $request->input('prenom_vendeur');
    $V->num_v =  $request->input('num_vendeur');
  $V->email_v =  $request->input('email_vendeur');
     $V->mdps_v =  $request->input('mdps_vendeur');


        
    $V->save();
          
    
     return redirect('gestion_vendeurs');
    }

function supprimerVendeur($id) {
    
       
    $V = vendeur::find($id);  //Rechercher l'étudiant per son "id"
    
    $V->delete();          
    
    return redirect('gestion_vendeurs');
    }
   


   public function  test(Request $request){

    $Vn = new vndr();
    $Vn->nom_vn =  $request->input('nom_vendeur');
    $Vn->prenom_vn =  $request->input('prenom_vendeur');
 
    

    $Vn->save();
        
     return redirect('succseful');
    } 

}