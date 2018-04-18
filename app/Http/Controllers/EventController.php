<?php
namespace App\Http\Controllers;

use App\Manifestation;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Photo;
use App\User;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
class EventController extends Controller
{

    public function index()
    {
        $manifestations = Manifestation::all();
        return view('event')->with('manifestations', $manifestations);
    }

    public function eventDetail($ID)
    {
        if (is_numeric($ID)) {
            $manifestation = Manifestation::find($ID);
            $photos = Photo::all()->where('ID_Manifestation', $ID);
            if (isset($manifestation)) {
                $data = [
                    'manifestation' => $manifestation,
                    'photos' => $photos
                ];
                if (Auth::check()) {
                    $iduser = Auth::id();
                    $user = User::find($iduser);
                    foreach ($user->participer as $manifestation) {
                        if ($manifestation->ID == $ID) {
                            $data['participeFlag'] = true;
                        }
                    }
                }
                return view('manifestation_detail')->with($data);
            }
        }
        $manifestations = Manifestation::all();
        return view('event')->with('manifestations', $manifestations);
    }
    
    public function participer($ID) {
       
              if (is_numeric($ID) ) {
                        $manifestation = Manifestation::find($ID);
                        $photos = Photo::all()->where('ID_Manifestation', $ID);
                       if (isset($manifestation)) {
                              $data = [
                                        'manifestation' => $manifestation,
                                        'photos' => $photos
                                    ];
                               if (Auth::check()) {
                                       $iduser = Auth::id();
                   
                                       $user = User::find($iduser);
                                       $trouve = false;
                                       foreach ($user->participer as $manifestation) {
                                                if($manifestation->ID == $ID) {
                                                      $trouve = true;
                                                   }
                                                }
                                                if($trouve) {
                                                       $user->participer()->detach($ID);
                                                  } else {
                                                    $user->participer()->attach($ID);
                                                         $data['participeFlag'] = true;
                                                     }
                                                }
                                    return view('manifestation_detail')->with($data);
            }
        }
        $manifestations = Manifestation::all();
        return view('event')->with('manifestations', $manifestations);
    }
    
    
    public function eventSendPicture(Request $request)
    {
        $ID = htmlspecialchars($_POST['id_event']);
        $file = $request->file('image');
        $file->move($_ENV['UPLOAD_DIRECTORY'], $file->getClientOriginalName());
        $photo = new Photo();
        $photo->intitule = $file->getClientOriginalName();
        $photo->description = "todo";
        $photo->fichier = $file->getClientOriginalName();
        $photo->ID_Manifestation = $ID;
        $photo->ID_Compte = 1;
        
        $photo->save();
        
        if (is_numeric($ID)) {
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
        return view('event')->with('manifestations', $manifestations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
}
?>
