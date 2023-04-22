@extends('layout.app')

<form action="/api/patients/{{ $patient->id }}" method="POST">
    @csrf
    @method('PUT')
    
    <div>
        <label for="">Name
            <input required type="text" name="name" value="{{ $patient->name }}">
        </label>
    </div>

    <div>
        <label for="">DOB
            <input required type="date" name="dob" value="{{ $patient->dob }}">
        </label>
    </div>

    <div>
        <label for="">National ID
            <input required type="text" name="national_id" value={{ $patient->national_id }}>
        </label>
    </div>

    <div>
        <label for="">Island
            <select required name="island_id" id="">
                @foreach ($islands as $island)
                    <option {{ $patient->address->island->id == $island->id ? 'selected' : '' }} value="{{ $island->id }}">{{ $island->atoll }} {{ $island->name }}</option>
                @endforeach
            </select>
        </label>
    </div>

    <div>
        <label for="">Street Address
            <input required type="text" name="street_address" value="{{ $patient->address->street_address }}">
        </label>
    </div>

    <div>
        <label for="">Postal code
            <input required type="text" name="postal_code" value="{{ $patient->address->postal_code }}">
        </label>
    </div>

    <button type="submit">Submit</button>
</form>


<form action="/api/patients/{{ $patient->id }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>