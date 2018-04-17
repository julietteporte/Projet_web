<?php

namespace App\Http\Controllers;

use App\Manifestation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        return view('event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Manifestation();
        $id_Users = (Auth::user()->id);
        if($request->has('btn_event')){
            $add = $request->all();
            $event->ID_Compte = $id_Users;
            $event->fill($add);
            $event->save();
        }
        return view('event');
    }

    public function creation(){
        return view("eventform");
    }
}
?>
