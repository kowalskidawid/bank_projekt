@extends('layout.master')

@section('content')
    <div class="row">
        <h2 class="col-md-8">Oddziały</h2>
        <div class="col-md-4 ms-auto text-end">
            <a href="{{ route('departments.create') }}" class="btn btn-success btn-lg">Dodaj oddział</a>
        </div>
    </div>
    <div class="table-responsive mt-5">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Oddział</th>
                <th>Adres</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($departments as $department)
                <tr>
                    <th>{{ $department->name }}</th>
                    <th>{{ $department->address }}</th>
                    <th>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                Opcje
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('departments.edit', $department->id) }}">Edycja</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('departments.delete', $department->id) }}">Usuń</a>
                                </li>
                            </ul>
                        </div>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
