<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use App\Models\Rower;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $seances = Seance::all();


        $rowers = Rower::all();

        return view('seances.index', compact('seances', 'rowers'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

        // Avant d'insérer la séance
        $seance = new Seance;
        $seance->date = $request->input('date');
        $seance->day = $request->input('date');
        $seance->start_time = $request->input('start_time');
        $seance->end_time = $request->input('end_time');
        $coachId = auth()->user()->id;
        $seanceData = $request->except('_token');
        $seanceData['coach_id'] = $coachId;

        Seance::create($seanceData);

        $seance->save();



        // Attachez les rameurs à la séance en utilisant les relations
        for ($i = 1; $i <= 6; $i++) {
            if ($request->has('rower' . $i)) {
                $seance->rowers()->attach($request->input('rower' . $i));
            }
        }

        // Redirigez ou effectuez d'autres actions...

        return redirect()->route('seances.index');
    }

    public function show(Seance $seance)
    {
        // Logique pour afficher les détails d'une séance
    }

    public function addMembers(Seance $seance)
    {
        $rowers = Rower::all(); // Vous pouvez ajuster cela selon votre logique
        return view('seances.add_members', compact('seance', 'rowers'));
    }

    public function storeMembers(Request $request, Seance $seance)
    {
        // Logique pour ajouter des membres à une séance
    }
}
