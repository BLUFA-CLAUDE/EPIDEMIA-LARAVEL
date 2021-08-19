<?php

namespace App\Http\Controllers;

use App\Pays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaysController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        return view('pays.add');
    }

    public function getAll()
    {
        //Pagination
        $list_pays = Pays::paginate(2);
        //$list_pays = Pays::all();
        return view('pays.list', ['list_pays'=>$list_pays]);
    }

    public function getById($id)
    {
        $pays = Pays::find($id);
        return view('pays.edit', ['pays'=>$pays]);
    }

    public function update(Request $request)
    {
        $pays = Pays::find($request->id);
        $pays->nom = $request->nom;
        $pays->user_id = Auth::id();
        $resut = $pays->save();
        return redirect('/pays/getAll');
    }

    public function delete($id)
    {
        $pays = Pays::find($id);
        if($pays != null)
        {
            $pays->delete();
        }
        return $this->getAll();
    }

    public function persist(Request $request)
    {
        $pays = new Pays();
        $pays->nom = $request->nom;
        $pays->user_id = Auth::id();
        $resut = $pays->save();
        return view('pays.add', ['confirmation'=>$resut]);
    }
}
