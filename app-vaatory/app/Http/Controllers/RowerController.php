<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rower;


class RowerController extends Controller
{
    public function index()
    {
        $rowers = Rower::all();
        return view('rower.index', ['rowers' => $rowers]);
    }
    public function create()
    {
        return view('rower.create');
    }
    public function persist(Request $request)
    {
        $newRower = new Rower();
        $newRower->first_name = $request->input('first_name');
        $newRower->last_name = $request->input('last_name');
        $newRower->date_of_birth = $request->input('date_of_birth');
        $newRower->availability = $request->has('availability') ? 1 : 0; // Convertir 'on' à 1 ou 0
        $newRower->save();

        return redirect()->route('rower.index');
    }


    public function store(Request $request)
    {
        Rower::create($request->all());
        return redirect()->route('rower.create');
    }
    public function show($id)
    {
        $rower = Rower::findOrFail($id);
        return view('rower.show',['rower' => $rower]);
    }
    public function edit($id)
    {
        $rower = Rower::findOrFail($id);
        return view('rower.edit', ['rower' => $rower]);
    }
    public function update(Request $request, $id)
{
    $rower = Rower::findOrFail($id);
    $rower->first_name = $request->input('first_name');
    $rower->last_name = $request->input('last_name');
    $rower->date_of_birth = $request->input('date_of_birth');

    // Vérifier si la case à cocher est cochée et attribuer la valeur appropriée
    $rower->availability = $request->has('availability') ? 1 : 0;

    $rower->save();

    return redirect()->route('rower.index');
}

    public function destroy($id)
    {
        $rower = Rower::findOrFail($id);
        $rower->delete();
        return redirect()->route('rower.index');
    }
}
