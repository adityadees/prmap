<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Poly;
use View;

class PolyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $polys = Poly::all();
        return View::make('polys.index')
        ->with('polys', $polys)
        ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('polys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'nama'       => 'required',
            'latitude'      => 'required|string',
            'longitude' => 'required|string'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('polys/create')
            ->withErrors($validator)
            ->withInput(Input::except('password'));
        } else {
            $poly = new Poly;
            $poly->nama       = Input::get('nama');
            $poly->latitude      = Input::get('latitude');
            $poly->longitude = Input::get('longitude');
            $poly->save();
            Session::flash('message', 'Berhasil Menyimpan Data!');
            return Redirect::to('polys');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poly = Poly::find($id);
        return View::make('polys.show')
        ->with('poly', $poly);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poly = Poly::find($id);
        return View::make('polys.edit')
        ->with('poly', $poly);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'nama'       => 'required',
            'latitude'      => 'required|string',
            'longitude' => 'required|string'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('polys/' . $id . '/edit')
            ->withErrors($validator)
            ->withInput(Input::except('password'));
        } else {
            $poly = Poly::find($id);
            $poly->nama       = Input::get('nama');
            $poly->latitude      = Input::get('latitude');
            $poly->longitude = Input::get('longitude');
            $poly->save();

            Session::flash('message', 'Berhasil Merubah Data!');
            return Redirect::to('polys');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poly = Poly::find($id);
        $poly->delete();

        Session::flash('message', 'Berhasil Menghapus Data!');
        return Redirect::to('polys');
    }


    public function nmap()
    {
        $maps = Poly::all();
        return View('polys.nmap', ['maps' => $maps]);
    }
}
