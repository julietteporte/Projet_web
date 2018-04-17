<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdministrationController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('administration')->with('user', $user);
    }
}
?>
