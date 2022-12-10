<?php

namespace App\Http\Controllers;

use App\Models\ResultKeluhan;
use App\Models\ResultQuisioner;
use Illuminate\Http\Request;

class ResultQuisionerController extends Controller
{

    public function index()
    {
        // $state = 'data kososng';
        // return view('pages.resultquisioner.index', compact('state'))->with([
        //     'result_quisioner' => ResultQuisioner::orderBy("id", "desc")->get(),

        // ]);
        return redirect('/home');
    }

    public function create()
    {
        // return view('pages.resultquisioner.create');
        return redirect('/home');
    }


    public function store(Request $request)
    {
        $totalBrain = 0;

        if ($request->q1 == 'c') {
            $totalBrain += 10;
        }
        if ($request->q2 == 'a') {
            $totalBrain += 10;
        }
        if ($request->q3 == 'a') {
            $totalBrain += 10;
        }
        if ($request->q4 == 'b') {
            $totalBrain += 10;
        }
        if ($request->q5 == 'a') {
            $totalBrain += 10;
        }
        if ($request->q6 == 'b') {
            $totalBrain += 10;
        }
        if ($request->q7 == 'a') {
            $totalBrain += 10;
        }
        if ($request->q8 == 'c') {
            $totalBrain += 10;
        }
        if ($request->q9 == 'c') {
            $totalBrain += 10;
        }
        if ($request->q10 == 'd') {
            $totalBrain += 10;
        }

        $result_quisioner = new ResultQuisioner;
        $result_quisioner->hasil = $totalBrain;
        $result_quisioner->user_id = (int)$request->user_id;
        $result_quisioner->save();
        if ($request->a1 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a1;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        if ($request->a2 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a2;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        if ($request->a3 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a3;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        if ($request->a4 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a4;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        if ($request->a5 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a5;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        if ($request->a6 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a6;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        if ($request->a7 != "") {
            $keluhan = new ResultKeluhan();
            $keluhan->keluhan = $request->a7;
            $keluhan->user_id = (int)$request->user_id;
            $keluhan->save();
        }
        return redirect('/home');
        // return to_route('resultquisioner.index')->with('success', 'data berhasil ditambah');
        // return to_route('resultkeluhan.store')->with('success', 'data berhasil ditambah')->withInput();
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('pages.resultquisioner.edit')->with(
            [
                'result_quisioner' => ResultQuisioner::find($id)
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hasil' => 'required|min:3',
            'user_id' => 'required'
        ]);

        $result_quisioner = ResultQuisioner::find($id);
        $result_quisioner->hasil = $request->hasil;
        $result_quisioner->user_id = $request->user_id;
        $result_quisioner->save();

        return to_route('resultquisioner.index')->with('success', 'data berhasil ditambah');
    }


    public function destroy($id)
    {
        $mahasiswa = ResultQuisioner::find($id);
        $mahasiswa->delete();
        return back()->with('success', 'data berhasil di delete');
    }
}
