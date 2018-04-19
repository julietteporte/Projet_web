<?php

namespace App\Http\Controllers;

use App\Manifestation;
use Illuminate\Http\Request;

class ManifestationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $events = Manifestation::orderBy('DateManifestation', 'asc')->get();
        return view('manifestations', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            switch ($_POST['filterParameter']){
                case "idea":
                    $events = User::where('EtatValidite', '=', '2')->orderBy('DateManifestation', 'asc')->get();
                    break;
                case "inactive":
                    $events = User::where('EtatValidite', '=', '3')->orderBy('DateManifestation', 'asc')->get();
                    break;
                case "active":
                    $events = User::where('EtatValidite', '=', '1')->orderBy('DateManifestation', 'asc')->get();
                    break;
                case "all":
                    $events = User::orderBy('DateManifestation', 'asc')->get();
                    break;
            }
            return view('listeManifestations', ['events' => $events])->render();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manifestation  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = Manifestation::where('ID', '=', $id)->get();
        return view('event', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manifestation  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Manifestation $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manifestation  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'EtatValidite' => 'required',
        ]);

        $events = Manifestation::find($id);
        $events->EtatValidite = $request->input('EtatValidite');
        $events->save();

        return redirect ('administration/events')->with('success', 'Mise à jour réussie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manifestation  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Manifestation::find($id);
        $events->delete();
        return redirect ('/administration/events')->with('success', 'Suppression réussie');
    }
}
?>