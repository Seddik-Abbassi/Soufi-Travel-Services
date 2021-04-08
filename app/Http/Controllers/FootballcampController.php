<?php

namespace App\Http\Controllers;

use App\Models\Footballcamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FootballcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $footballcamps = Footballcamp::get();
        return view('footballcamps', compact('footballcamps'));
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
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $footballcamp = Footballcamp::find($id);
        return View::make("footballcamp", compact('footballcamp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footballcamp  $footballcamp
     * @return \Illuminate\Http\Response
     */
    public function edit(Footballcamp $footballcamp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footballcamp  $footballcamp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footballcamp $footballcamp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footballcamp  $footballcamp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footballcamp $footballcamp)
    {
        //
    }
}
