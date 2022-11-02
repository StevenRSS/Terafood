<?php

namespace App\Http\Controllers;

use App\Models\recipes;
use App\Http\Requests\StorerecipesRequest;
use App\Http\Requests\UpdaterecipesRequest;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorerecipesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerecipesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function show(recipes $recipes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function edit(recipes $recipes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterecipesRequest  $request
     * @param  \App\Models\recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterecipesRequest $request, recipes $recipes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function destroy(recipes $recipes)
    {
        //
    }
}
