<?php

namespace App\Http\Controllers;

use App\Manifestation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Photo;

class SuggestionBoxController extends Controller
{
    public function index()
    {
        $manifestations = Manifestation::all();
        return view('suggestion_box')->with('manifestations', $manifestations);
    }
    
    public function suggestionBoxDetail($ID)
    {
        if (is_numeric($ID) ) {
            $manifestation = Manifestation::find($ID);
            $photos = Photo::all()->where('ID_Manifestation', $ID);
            if (isset($manifestation)) {
                $data = [
                    'manifestation' => $manifestation,
                    'photos' => $photos
                ];
                return view('manifestation_detail')->with($data);
            }
        }
        $manifestations = Manifestation::all();
        return view('suggestion_box')->with('manifestations', $manifestations);
    }
}
?>