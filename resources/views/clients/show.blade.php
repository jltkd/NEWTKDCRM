@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if( $client->domain && $client->domain->domain_ssl_expire_date < \Carbon\Carbon::today() )
                            <div class="alert alert-danger" role="alert">
                                The domains SSL expired on {{ $client->domain->domain_ssl_expire_date }}
                            </div>
                        @endif
                        <h1 class="single-title">{{ $client->client_name }}
                            @if( $client->client_status === 'active')
                                <i class=" active-icon far fa-check-circle"></i>
                            @else
                                <i class=" inactive-icon fas fa-ban"></i>
                            @endif
                        </h1>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6  d-flex flex-column">
                                <!-- START ITEM -->
                                <div class="card social-card share  full-width m-b-10 no-border" data-social="item">
                                    <div class="card-header ">
                                        <h5 class="text-primary pull-left fs-12">SSL Expires in:</h5>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="card-body text-center">
                                        @if( $client->domain && $client->domain->domain_ssl_expire_date > \Carbon\Carbon::today() )
                                            <h2>{{ \Carbon\Carbon::parse($client->domain->domain_ssl_expire_date)->diffInDays(\Carbon\Carbon::now()) }} days</h2>
                                        @else
                                            <h2>EXPIRED</h2>
                                        @endif
                                    </div>
                                </div>
                            </div>
                                <!-- END ITEM -->
                            <div class="col-lg-4 col-sm-6  d-flex flex-column">
                                <!-- START ITEM -->
                                <div class="card social-card share  full-width m-b-10 no-border" data-social="item">
                                    <div class="card-header ">
                                        <h5 class="text-primary pull-left fs-12">IP Address</h5>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="card-body text-center">
                                        <h2>{{ $client->domain->domain_ip }}</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- END ITEM -->
                            <div class="col-lg-4 col-sm-6  d-flex flex-column">
                                <!-- START ITEM -->
                                <div class="card social-card share  full-width m-b-10 no-border" data-social="item">
                                    <div class="card-header ">
                                        <h5 class="text-primary pull-left fs-12">Expiring SSL</h5>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="card-body text-center">
                                        <p>test</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END ITEM -->
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <p><b>Contact: </b>
                                    @if( $client->contact )
                                        {{ $client->contact->contact_first_name }} {{ $client->contact->contact_last_name }}<br>
                                    @endif
                                    @if( $client->contact )
                                        <b>Phone Number: </b>{{ $client->contact->contact_phone }}<br>
                                    @endif
                                    @if( $client->contact )
                                        <b>Email Address: </b><a href="mailto:{{ $client->contact->contact_email }}">{{ $client->contact->contact_email }}</a></p>
                                @endif
                                <address>
                                    {{ $client->client_address }}<br>
                                    {{ $client->client_city }}, {{ $client->client_state }}<br>
                                    {{ $client->client_zip }}
                                </address>
                            </div>
                            <div class="col-lg-4">
                                <p><b>Website:</b> <a href="{{ $client->client_website }}">{{ $client->client_website }}</a><br>
                                @if( $client->server )
                                    <b>Hosting Company:</b> {{ $client->server->server_company_name }}<br>
                                @endif
                                @if( $client->domain )
                                    <b>Domain Through:</b> {{ $client->domain->domain_purchased_through }}<br>
                                    <b>Years Paid Through: </b>{{ $client->domain->domain_years_paid }}<br>
                                    <b>Domain Expires: </b>{{ $client->domain->domain_expire_date }}<br>
                                    <b>SSL: </b>{{ $client->domain->domain_ssl }}<br>
                                    <b>SSL Expires: </b>{{ $client->domain->domain_ssl_expire_date }}<br>
                                    <b>SSL Email: </b>{{ $client->domain->domain_email }}<br>
                                    <b>Notes: </b>{{ $client->domain->domain_notes }}
                                </p>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                @if( $client->server)
                                    <p>
                                        <b>Server Company: </b>{{ $client->server->server_company_name }}<br>
                                        <b>Hosting Past Due: </b>{{ $client->server->server_past_due }}<br>
                                        <b>Server Notes: </b>{{ $client->server->server_notes }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn btn-primary" href="/clients/{{ $client->id }}/edit">Edit Client</a>
                                @if( !$client->contact )
                                    <a href="#" class="btn btn-success">Add Contact</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
