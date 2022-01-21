@extends('layout.master')

@section('content')
    <h2>Klienci</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Oddział</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Pesel</th>
                <th>Numer konta</th>
                <th>Data utworzenia</th>
            </tr>
            </thead>
            <tbody>
            @if($clients->isNotEmpty())
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->de }}</td>
                        <th>{{ $client->first_name }}</th>
                        <th>{{ $client->last_name }}</th>
                        <th>{{ $client->pesel }}</th>
                        <th>{{ $client->bankAccount->account_number }}</th>
                        <th>{{ $client->created_at }}</th>
                    </tr>
                @endforeach
            @else
                <tr class="text-center">
                    <td colspan="6">
                        Nie znaleziono klientów
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
