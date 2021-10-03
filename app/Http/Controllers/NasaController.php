<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class NasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date('Y-m-d');
        $date_past = strtotime('-7 day', strtotime($today));
        $date_past = date('Y-m-d', $date_past);
        $nasa = HTTP::get('https://api.nasa.gov/planetary/apod?api_key=pQe5fmYcjKvC1UJiVZed5WAqFmBaR9vHduBxro4o&start_date='.$date_past.'&end_date='.$today);
        $datos = $nasa->json();
        
        return view('welcome', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title, $k)
    {
        $today = date('Y-m-d');
        $date_past = strtotime('-7 day', strtotime($today));
        $date_past = date('Y-m-d', $date_past);
        $nasa = HTTP::get('https://api.nasa.gov/planetary/apod?api_key=pQe5fmYcjKvC1UJiVZed5WAqFmBaR9vHduBxro4o&start_date='.$date_past.'&end_date='.$today);
        $datos = $nasa->collect();
        $item = $datos->where('title', $title);
        $key = $k;
        return view('show', compact('datos','item','key'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nasa  $nasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Nasa $nasa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nasa  $nasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nasa $nasa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nasa  $nasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nasa $nasa)
    {
        //
    }
}
