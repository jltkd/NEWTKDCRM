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
                                <th>IP Address</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clients->sortBy('client_name') as $client)
                                <tr>
                                    <td><a href="/clients/{{ $client->id }}">{{ $client->client_name }}</a></td>
                                    <td>
                                        @if( $client->contact )
                                            {{ $client->contact->contact_first_name }}
                                        @endif
                                    </td>
                                    <td>
                                        @if( $client->contact )
                                            {{ $client->contact->contact_last_name }}
                                        @endif
                                    </td>
                                    <td>
                                        @if( $client->domain )
                                            {{ $client->domain->domain_ip }}
                                        @endif
                                    </td>
                                    <td>
                                        @if( $client->contact )
                                            <a href="mailto:{{ $client->contact->contact_email }}">{{ $client->contact->contact_email }}</a>
                                        @endif
                                    </td>
                                    @if( $client->client_status  === 'active')
                                        <td><a href="/clients/{{ $client->id }}" class="btn btn-success btn-block btn-sm">Active <i class="fas fa-thumbs-up"></i></a></td>
                                    @else
                                        <td><a href="/clients/{{ $client->id }}" class="btn btn-danger btn-block btn-sm">Not Active <i class="fas fa-thumbs-down"></i></a></td>
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
