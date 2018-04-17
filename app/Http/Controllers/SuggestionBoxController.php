<?php

namespace App\Http\Controllers;

use App\Manifestation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Photo;
use App\Vote;
use App\TypeVote;
use Illuminate\Support\Facades\Log;

class SuggestionBoxController extends Controller
{
    public function index()
    {
//         $manifestations = Manifestation::all();
        $manifestations = Manifestation::withCount(['votePour','voteContre'])->get();
        return view('suggestion_box')->with('manifestations', $manifestations);
    }
    
    public function addLike($ID,$TYPE) {
        
        if (Auth::check()) {
            $iduser = Auth::id();
            
            $typeVote = TypeVote::where('Type', $TYPE)->first();
            if(isset($typeVote)) {
                $vote = Vote::where('ID_Manifestation', $ID)
                ->where('ID_TypeVote',$typeVote->ID)
                ->where('ID_Compte',$iduser)
                ->first();
                if(isset($vote)) {
                    Vote::where('ID_Manifestation', $ID)
                    ->where('ID_TypeVote',$typeVote->ID)
                    ->where('ID_Compte',$iduser)->delete();
                } else {
                    Vote::where('ID_Manifestation', $ID)
                    ->where('ID_Compte',$iduser)->delete();
                    
                    $vote = new Vote();
                    $vote->ID_Manifestation = $ID;
                    $vote->ID_TypeVote = $typeVote->ID;
                    $vote->ID_Compte = $iduser;
                    $vote->save();
                }
            }
        }
        $manifestations = Manifestation::withCount('vote')->get();
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