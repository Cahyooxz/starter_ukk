<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index(){
        $user = User::get();
        confirmDelete("Yakin mau hapus user?", "data akan hilang permanen!!");
        return view('user.index',[
            'user' => $user
        ]);
        // return redirect('/')->with('success', 'Task Created Successfully!');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ];
        
        User::create($data);
        return redirect('/')->with('success', 'Task Created Successfully!');
    }
    public function destroy(Request $request, $id){
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('/')->with('success', 'Data berhasil dihapus!');
    }
}
