<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Island;
use Illuminate\Http\Request;

class IslandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Island::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Island $island)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Island $island)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Island $island)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Island $island)
    {
        //
    }
}
