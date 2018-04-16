<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class SearchController extends Controller
{
  public function index()
  {
    $produit = Produit::all();
    return view('search')->with('produit',$produit);
  }

  protected function search()
  {
    // $requete = htmlspecialchars($_POST['keywords']);

    return('search');
  }
}
?>
