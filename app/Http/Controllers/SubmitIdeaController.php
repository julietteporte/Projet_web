<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class SubmitIdeaController extends Controller
{
    public function index()
    {
        $produit = Produit::all();
        return view('submit_idea')->with('produit',$produit);
//         return view('submit_idea');
    }
}
?>
