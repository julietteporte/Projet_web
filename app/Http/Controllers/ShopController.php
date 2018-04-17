<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Image;;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;


class ShopController extends Controller
{
    public function index()
    {
      $produit = Produit::all();
      return view('shop')->with('produit',$produit);
    }

    public function productDetail($ID)
    {
        if (is_numeric($ID)) {
            $produit = Produit::find($ID);
            $images = Image::all()->where('ID_Produit', $ID);
            if (isset($produit)) {
                $data = [
                    'produit' => $produit,
                    'images' => $images
                ];
                return view('product_detail')->with($data);
            }
        }
        $produits = Produit::all();
        return view('shop')->with('produits', $produits);
    }

}
?>
