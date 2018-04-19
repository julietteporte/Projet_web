<?php

namespace App\Http\Controllers;


use App\User;
use App\Manifestation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministrationController extends Controller
{
    public function index()
    {
        $user = User::all();
        $evt = Manifestation::all();
        return view('administration')->with('user', $user)->with('evt', $evt);
    }

    public function store(Request $request)
    {
        $event = new Manifestation();
        $id_Users = (Auth::user()->id);
        if ($request->has('btn_event')) {
            $add = $request->all();
            $event->ID_Compte = $id_Users;
            $event->fill($add);
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
        return view('event')->with('manifestations', $manifestations);
    }

    public function creation(){
        return view("administration");
    }

    /*public function update(Request $request, $id){
        $user=User::find($id);
        $event=Manifestation::find($id);

        if ($request->has('btn_student')){
            $user->update(['ID_TypeCompte' => '1']);
        }
        else if ($request->has('btn_member')){
            $user->update(['ID_TypeCompte' => '2']);
        }
        else if ($request->has('btn_employee')){
            $user->update(['ID_TypeCompte' => '3']);
        }
        else if ($request->has('btn_enable')){
            $user->update(['isActive' => '1']);
        }
        else if ($request->has('btn_disable')){
            $user->update(['isActive' => '0']);
        }
        else if ($request->has('btn_validate_event')){
            $event->update(['isActive' => '1']);
            $event->update(['EtatValidite' => 'En cours de traitement']);
        }
        else if ($request->has('btn_disable_event')){
            $event->update(['IsActive' => '0']);
        }
        return redirect('/administration');
    }*/
}

?>
