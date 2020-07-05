<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels=ArtikelModel::get_all();
        return view('artikel.index', compact('artikels'));
    }

    public function create()
    {
        return view('artikel.form');
    }

    public function store(Request $request)
    {
        $data=$request->all();
        unset($data["_token"]);
        $artikels = ArtikelModel::save($data);
        return redirect('/artikel');
    }

    public function show($id)
    {
        $artikels=ArtikelModel::find_by_id($id);
        return view('artikel.detail', compact('artikels'));
    }

    public function edit($id)
    {
        $artikels=ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact('artikels'));
    }

    public function update($id, Request $request)
    {
        $artikels = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id)
    {
        $deleted=ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}
