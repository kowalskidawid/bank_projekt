@extends('layout.master')

@section('content')
    <h2>Oddział centralny</h2>
    <form method="post" action="{{ route('central-office.update') }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nazwa</label>
            <input class="form-control" name="name" id="name" value="{{ old('name', $centralOffice->name) }}">
        </div>
        <div class="form-group">
            <label for="address">Adres</label>
            <textarea class="form-control" name="address" id="address" rows="3">{{ old('address', $centralOffice->address) }}</textarea>
        </div>
        <div class="col-md-4 mx-auto mt-5">
            <input type="submit" value="Zapisz" class="btn btn-outline-primary btn-lg">
        </div>
    </form>
@endsection
