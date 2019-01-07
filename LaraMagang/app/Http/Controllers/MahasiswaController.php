<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
	public function index(){
	    $data = Mahasiswa::all();
	    return view("mahasiswa.index", compact('data'));
	}


	public function create(){
		return view("mahasiswa.create");
	}

	public function store(Request $request){
		$petugas = Mahasiswa::create($request->all());
		return redirect()->route("mahasiswa-index");
	}

	public function edit($id){
		$data = Mahasiswa::findOrFail($id);
		return view("mahasiswa.edit", compact('data'));
	}

	public function update(Request $request, $id){
		$data = Mahasiswa::findOrFail($id);
		$data->update($request->all());

		// var_dump($data);
		return redirect()->route('mahasiswa-index');
	}

	public function delete($id){
		$data = Mahasiswa::findOrFail($id);
		$data->delete();

		return redirect()->route('mahasiswa-index');
				

	}

}
