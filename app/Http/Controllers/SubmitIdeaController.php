<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Manifestation;
use Illuminate\Support\Facades\Auth;

class SubmitIdeaController extends Controller
{
    public function index()
    {
        $produit = Produit::all();
        return view('submit_idea')->with('produit',$produit);
//         return view('submit_idea');
    }
    
    
    public function submitSuggestion(Request $request)
    {
        $event = new Manifestation();
        $id_Users = (Auth::user()->id);
        if($request->has('btn_suggestion')){
            $add = $request->all();
            $event->ID_Compte = $id_Users;
            $event->EtatValidite = 'En cours de traitement';
            $event->fill($add);
            $event->save();
        }
        return redirect('/suggestion_box');
    }
    
    public function creation(){
        return view('submit_idea');
    }
}
?>
