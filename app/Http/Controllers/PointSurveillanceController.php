<?php

namespace App\Http\Controllers;

use App\PointSurveillance;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PointSurveillanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function add()
    {
        $list_zones = Zone::all();
        return view('ps.add', ['list_zones'=>$list_zones]);
    }

    public function getAll()
    {
        
        //$list_pays = Pays::paginate(2);
        $list_ps = PointSurveillance::all();
        return view('ps.list', ['list_ps'=>$list_ps]);
    }

    public function getById($id)
    {
        $ps = PointSurveillance::find($id);
        return view('ps.edit', ['ps'=>$ps]);
    }

    public function update(Request $request)
    {
        $ps = PointSurveillance::find($request->id);
        $ps->code = $request->code;
        $ps->cordonnees = $request->cordonnees;
        $ps->zone_id = $request->zone_id;
        $ps->user_id = Auth::id();
        $resut = $ps->save();
        return redirect('/ps/getAll');
    }

    public function delete($id)
    {
        $ps = PointSurveillance::find($id);
        if($ps != null)
        {
            $ps->delete();
        }
        return redirect('/ps/getAll');
    }

    public function persist(Request $request)
    {
        $ps = new PointSurveillance();
        $ps->code = $request->code;
        $ps->cordonnees = $request->cordonnees;
        $ps->zone_id = $request->zone_id;
        $ps->user_id = Auth::id();
        $resut = $ps->save();

        $list_zones = Zone::all();
        return view('ps.add', ['confirmation'=>$resut, 'list_zones'=>$list_zones]);
    }
}
