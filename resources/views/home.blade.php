@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Clients</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover dataTable no-footer">
                        <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients->sortBy('client_name') as $client)
                                <tr>
                                    <td><a href="/clients/{{ $client->id }}">{{ $client->client_name }}</a></td>
                                    <td>{{ $client->contact->contact_first_name }}</td>
                                    <td>{{ $client->contact->contact_last_name }}</td>
                                    <td>{{ $client->contact->contact_phone }}</td>
                                    <td><a href="mailto:{{ $client->contact->contact_email }}">{{ $client->contact->contact_email }}</a></td>
                                    @if( $client->client_status  === 'active')
                                        <td><button class="btn btn-success">Active</button></td>
                                    @else
                                        <td><button class="btn btn-warning">Not Active</button></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $clients->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
