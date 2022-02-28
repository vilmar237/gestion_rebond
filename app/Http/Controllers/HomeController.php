<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeTerrain;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == "D") {
            $data=TypeTerrain::all();
            return view('home',['data'=>$data]);
        }
        elseif (Auth::user()->role == "C"){
            return redirect('/');
        }
    }

    public function create()
    {
        return view('typestade.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
        ]);

        $data=new TypeTerrain;
        $data->name=$request->title;
        $data->save();

        return redirect('admin/typestade/create')->with('success','Les données ont été ajoutées.');
    }

    /*public function show($id)
    {
        $data=TypeTerrain::find($id);
        return view('typestade.show',['data'=>$data]);
    }*/


    

    public function logout()
    {
        Auth::logout();
        return redirect('admin/');
    }

}
