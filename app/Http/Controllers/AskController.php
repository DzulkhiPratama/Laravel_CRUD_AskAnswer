<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AskModels;


class AskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ask = AskModels::get_all();

        return view('ask.index', ['ask' => $ask]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ask.createask');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $new_ask = AskModels::save($request->all());

        return redirect('/pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($a)
    {
        $ask = AskModels::find_by_id($a);

        return view('ask.askedit', compact('ask'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $a)
    {
        $askit = AskModels::update($a, $request->all());
        //return redirect('/pertanyaan');
        return redirect()->route('tanya_at.index', $request->get('ask_id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($a)
    {
        $deleteat = AskModels::deleteat($a);
        return redirect('/pertanyaan');
    }
}
