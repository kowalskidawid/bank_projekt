@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Rejestracja</h2>
            <form action="{{ route('register.request') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="first_name">Imię</label>
                    <input class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}">
                </div>
                <div class="form-group">
                    <label for="last_name">Nazwisko</label>
                    <input class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}">
                </div>
                <div class="form-group">
                    <label for="pesel">Pesel</label>
                    <input class="form-control" name="pesel" id="pesel" value="{{ old('pesel') }}">
                </div>
                <div class="form-group">
                    <label for="department_id">Oddział</label>
                    <select class="form-control" name="department_id" id="department_id">
                        <option>Wybierz Oddział...</option>
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Adres</label>
                    <textarea class="form-control" name="address" id="address">{{ old('name') }}</textarea>
                </div>
                <div class="col-md-4 mx-auto mt-5">
                    <input type="submit" value="Zarejestruj się" class="btn btn-outline-primary btn-lg">
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h2>Zaloguj się</h2>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="login">Login</label>
                    <input class="form-control" name="login" id="login" value="{{ old('login') }}">
                </div>
                <div class="form-group">
                    <label for="password">Hasło</label>
                    <input class="form-control" name="password" id="password" value="{{ old('password') }}" type="password">
                </div>
                <div class="col-md-4 mx-auto mt-5">
                    <input type="submit" value="Zaloguj się" class="btn btn-outline-primary btn-lg">
                </div>
            </form>
            <div class="alert alert-info mt-5">
                <h4>Dale logowania</h4>
                <span>Login: <strong>admin</strong></span> <br>
                <span>Hasło: <strong>demo</strong></span>
            </div>
        </div>
    </div>
@endsection
