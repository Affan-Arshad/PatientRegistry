@extends('layout.app')

<form action="/api/addresses/{{ $address->id }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="">Street Address
            <input requried type="text" name="street_address" value="{{ $address->street_address }}">
        </label>
    </div>

    <div>
        <label for="">Postal code
            <input required type="text" name="postal_code" value="{{ $address->postal_code }}">
        </label>
    </div>

    <div>
        <label for="">Island
            <select required name="island_id" id="">
                @foreach ($islands as $island)
                    <option {{ $address->island->id == $island->id ? 'selected' : '' }} value="{{ $island->id }}">
                        {{ $island->atoll }} {{ $island->name }}</option>
                @endforeach
            </select>
        </label>
    </div>

    <button type="submit">Submit</button>
</form>

<form action="/api/addresses/{{ $address->id }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>
