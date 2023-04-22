<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Address::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $address = Address::where('island_id', $request->island_id)->where('street_address', $request->street_address)->where('postal_code', $request->postal_code)->first();
        if($address == null) {
            $address = Address::create($request->all());
        }
        return $address;
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return $address;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        return $address->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        return $address->delete();
    }
}
