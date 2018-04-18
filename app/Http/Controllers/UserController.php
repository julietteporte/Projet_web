<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::orderBy('nom', 'asc')->get();
        return view('utilisateurs', compact('users'));
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
                case "students":
                    $users = User::where('ID_TypeCompte', '=', '1')->orderBy('nom', 'asc')->get();
                    break;
                case "members":
                    $users = User::where('ID_TypeCompte', '=', '2')->orderBy('nom', 'asc')->get();
                    break;
                case "employees":
                    $users = User::where('ID_TypeCompte', '=', '3')->orderBy('nom', 'asc')->get();
                    break;
                case "all":
                    $users = User::orderBy('nom', 'asc')->get();
                    break;
            }
            return view('listeUtilisateurs', ['users' => $users])->render();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::where('id', '=', $id)->get();
        return view('utilisateurs', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ID_TypeCompte' => 'required',
        ]);

        $users = User::find($id);
        $users->ID_TypeCompte = $request->input('ID_TypeCompte');
        $users->save();

        return redirect ('administration/users')->with('success', 'Mise à jour réussie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect ('/administration/users')->with('success', 'Suppression réussie');
    }
}
?>