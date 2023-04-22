@extends('layout.app')

<form action="/api/patients/" method="POST">
    @csrf

    <div>
        <label for="">Name
            <input required type="text" name="name">
        </label>
    </div>

    <div>
        <label for="">DOB
            <input required type="date" name="dob">
        </label>
    </div>

    <div>
        <label for="">National ID
            <input required type="text" name="national_id">
        </label>
    </div>

    <div>
        <label for="">Island
            <select required name="island_id" id="">
                @foreach ($islands as $island)
                    <option value="{{ $island->id }}">{{ $island->atoll }} {{ $island->name }}</option>
                @endforeach
            </select>
        </label>
    </div>

    <div>
        <label for="">Street Address
            <input required type="text" name="street_address">
        </label>
    </div>

    <div>
        <label for="">Postal code
            <input required type="text" name="postal_code">
        </label>
    </div>

    <button type="submit">Submit</button>
</form>
