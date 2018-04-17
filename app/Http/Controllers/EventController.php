<?php
namespace App\Http\Controllers;

use App\Manifestation;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Photo;

class EventController extends Controller
{
    public function index()
    {
        $manifestations = Manifestation::all();
        return view('event')->with('manifestations', $manifestations);
    }

    public function eventDetail($ID)
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
        return view('event')->with('manifestations', $manifestations);
    }

    public function eventSendPicture(Request $request)
    {
        $ID = htmlspecialchars($_POST['id_event']);
        $file = $request->file('image');
        $file->move($_ENV['UPLOAD_DIRECTORY2'], $file->getClientOriginalName());
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

}
?>
