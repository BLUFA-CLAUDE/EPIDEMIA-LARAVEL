<?php

namespace App\Http\Controllers;

use App\Pays;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZoneController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        $list_pays = Pays::all();
        return view('zone.add', ['list_pays'=>$list_pays]);
    }

    public function getAll()
    {
        
        //$list_pays = Pays::paginate(2);
        $list_zones = Zone::all();
        return view('zone.list', ['list_zones'=>$list_zones]);
    }

    public function getById($id)
    {
        $zone = Zone::find($id);
        return view('zone.edit', ['zone'=>$zone]);
    }

    public function update(Request $request)
    {
        $zone = Zone::find($request->id);
        $zone->nom = $request->nom;
        $zone->pays_id = $request->pays_id;
        $zone->user_id = Auth::id();
        $resut = $zone->save();
        return redirect('/zone/getAll');
    }

    public function delete($id)
    {
        $zone = Zone::find($id);
        if($zone != null)
        {
            $zone->delete();
        }
        return redirect('/zone/getAll');
    }

    public function persist(Request $request)
    {
        $zone = new Zone();
        $zone->nom = $request->nom;
        $zone->pays_id = $request->pays_id;
        $zone->user_id = Auth::id();
        $resut = $zone->save();

        $list_pays = Pays::all();
        return view('zone.add', ['confirmation'=>$resut, 'list_pays'=>$list_pays]);
    }
}
