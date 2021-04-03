<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;

class KelolaController extends Controller
{
    public function index(){
        $admin = Admins::all();
        return view('admin.kelola.index', compact('admin'));
    }
    
    public function destroy($id){
        $admin = Admins::find($id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function create(){
        return view('admin.kelola.create');
    }

    public function store(Request $request){
        Admins::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'password'=>bcrypt($request->password)
        ]);
        return redirect()->route('admin.kelola.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $edit = Admins::find($id);
        return view('admin.kelola.edit', compact('edit'));
    }

    public function update($id, Request $request){
        $edit = Admins::find($id);
        if($request->password == null){
            $edit->update([
                'name'=>$request->name,
                'username'=>$request->username,
            ]);
        }else{
            $edit->update([
                'name'=>$request->name,
                'username'=>$request->username,
                'password'=>bcrypt($request->password)
            ]);
        }
        return redirect()->route('admin.kelola.index')->with('success', 'Data berhasil diubah');
    }
}
