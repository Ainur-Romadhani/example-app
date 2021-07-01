<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datas = User::select('name')->get();
        return view('home',compact('datas'));
    }

    public function details($id){

        $data = User::findOrFail($id);
        return view('detail',compact('data'));
    }

    public function create(){

        return view('create');
    }

    public function store(Request $request){

        $data               = $request->all();
        $data['password']   = Hash::make($request->password);

        $user               = User::create($data);
        return redirect('/home');
        
    }

    public function update(Request $request, $id){

        $user = User::findOrFail($id); //mencari user berdasarkan id user
        $data = $request->all(); //menerima request dari view
        $user->update($data); //update data user
        return redirect('/home'); //kembalikan kel halaman home
    }

    public function delete($id){

        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/home');
    }
}
