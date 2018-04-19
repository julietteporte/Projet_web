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

    public function index2()
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
        $iduser = Auth::id();
        $ID = htmlspecialchars($_POST['id_event']);
        $file = $request->file('image');
        $file->move($_ENV['UPLOAD_DIRECTORY2'], $file->getClientOriginalName());
        $photo = new Photo();
        $photo->intitule = $file->getClientOriginalName();
        $photo->description = "todo";
        $photo->fichier = $file->getClientOriginalName();
        $photo->ID_Manifestation = $ID;
        $photo->ID_Compte = $iduser;
        
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            switch ($_POST['filterParameter']){
                case "idea":
                    $events = Manifestation::where('EtatValidite', '=', '2')->orderBy('DateManifestation', 'asc')->get();
                    break;
                case "inactive":
                    $events = Manifestation::where('EtatValidite', '=', '3')->orderBy('DateManifestation', 'asc')->get();
                    break;
                case "active":
                    $events = Manifestation::where('EtatValidite', '=', '1')->orderBy('DateManifestation', 'asc')->get();
                    break;
                case "all":
                    $events = Manifestation::orderBy('DateManifestation', 'asc')->get();
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
        return view('manifestations', compact('events'));
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
        return redirect ('administration/events')->with('success', 'Suppression réussie');
    }
}
?>
