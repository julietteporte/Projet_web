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
    if(isset($_POST['add_product']))
    {
      printf('cc');
      if (!empty($_POST['Intitule']) && !empty($_POST['Legende']) && !empty($_POST['Description'])) //boolean qui renvoie si la variable est vide, + "!" pour inverser l'action
      {
        $this->ShopController->store($request)();
      }
    }
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

  public function store(Request $request)
  {
    $product = new Produit();
    if ($request->has('add_product')) {
      $add = $request->all();
      $product->fill($add);
      $product->save();
    }
    return redirect('/shop');
  }
  public function creation()
  {
    return view("shop");
  }

  public function eventSendPicture(Request $request)
  {
    $file = $request->file('Fichier');
    $file->move($_ENV['UPLOAD_DIRECTORY2'], $file->getClientOriginalName());

    $produits = Produit::all();
    return view('shop')->with('produits', $produits);
  }


}
?>
