<?php

namespace App\Http\Controllers;


use App\User;
use App\Manifestation;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class AdministrationController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('administration')->with('user', $user);
    }

    public function store(Request $request)
    {
        $event = new Manifestation();
        $id_Users = (Auth::user()->id);
        if ($request->has('btn_event')) {
            $add = $request->all();
            $event->ID_Compte = $id_Users;
            $event->fill($add);
            $event->save();
        }
            return redirect('/event');
    }
      public function creation(){
        return view("administration");
    }
}

?>
