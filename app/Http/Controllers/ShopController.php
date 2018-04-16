<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ShopController extends Controller
{
    public function index()
    {
      $produit = Produit::all();
      return view('shop')->with('produit',$produit);
    }
}
?>
