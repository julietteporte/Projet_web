<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Categorie;
use App\Image;;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;


class ShopController extends Controller
{
  public function index()
  {
    $produit = Produit::all();
    $categorie = Categorie::all();
    $datas = [
      'produit' => $produit,
      'categorie' => $categorie
    ];
    return view('shop')->with($datas);

  //  return view('shop')->with('produit',$produit);
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


  public function creation()
  {
    return view("shop");
  }

  public function store(Request $request)
  {
    $categorie = new Categorie();
    $product = new Produit();
    
    if ($request->has('add_categorie')) {
      $add = $request->all();
      $categorie->fill($add);
      $categorie->save();
    }
    else if ($request->has('add_product')) {
      $add = $request->all();
      $product->fill($add);
      $file = $request->file('Fichier');
      if(isset($file)) {
          $file->move($_ENV['UPLOAD_DIRECTORY'], $file->getClientOriginalName());
          $product->Fichier = '/uploads/' . $file->getClientOriginalName();
      } else {
          $product->Fichier = '/pictures/logo.png';
      }
      $product->save();
    }
    return redirect('/shop');
  }

  public function eventSendPicture(Request $request)
  {
    $file = $request->file('Fichier');
    $file->move($_ENV['UPLOAD_DIRECTORY'], $file->getClientOriginalName());

    $produits = Produit::all();
    return view('shop')->with('produits', $produits);
  }


}
?>
