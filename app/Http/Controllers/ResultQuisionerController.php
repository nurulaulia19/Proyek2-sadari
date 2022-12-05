<?php

namespace App\Http\Controllers;

use App\Models\ResultQuisioner;
use Illuminate\Http\Request;

class ResultQuisionerController extends Controller
{

    public function index()
    {
        return view('pages.resultquisioner.index')->with([
            'result_quisioner' => ResultQuisioner::all()
        ]);
    }

    public function create()
    {
        return view('pages.resultquisioner.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'hasil' => 'required|min:3',
            'user_id' => 'required'
        ]);

        $result_quisioner = new ResultQuisioner;
        $result_quisioner->hasil = $request->hasil;
        $result_quisioner->user_id = $request->user_id;
        $result_quisioner->save();

        return to_route('resultquisioner.index')->with('success', 'data berhasil ditambah');
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
