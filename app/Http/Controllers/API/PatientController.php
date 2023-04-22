<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Patient::all();
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
        $address = Address::where('island_id', $request->island_id)->where('street_address', $request->street_address)->where('postal_code', $request->postal_code)->first();
        if($address == null) {
            $address = Address::create($request->all());
        }
        return Patient::create([...$request->all(), 'address_id' => $address->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return $patient;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $address = Address::where('island_id', $request->island_id)->where('street_address', $request->street_address)->where('postal_code', $request->postal_code)->first();
        if($address == null) {
            $address = Address::create($request->all());
        }
        return $patient->update([...$request->all(), 'address_id' => $address->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        return $patient->delete();
    }
}
