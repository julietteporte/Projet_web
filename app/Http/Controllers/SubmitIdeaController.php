<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Manifestation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
            $event->fill($add);
            $event->EtatValidite = '2';
            $image = $request->file('image');
            if(isset($image)) {
                $file = $request->file('image');
                $file->move($_ENV['UPLOAD_DIRECTORY2'], $file->getClientOriginalName());
                $event->Fichier = '/uploads/' . $file->getClientOriginalName();
            } else {
                $event->Fichier = '/pictures/logo.png';
            }
            $event->save();
        }
        $manifestations = Manifestation::all();
        return view('suggestion_box')->with('manifestations', $manifestations);
    }
    
    public function creation(){
        return view("eventform");
    }
}
?>
