@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Client</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="post" action="{{ url('clients') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="client_name" class="col-md-4 col-form-label text-md-right">{{ __('Client Name') }}</label>

                                <div class="col-md-6">
                                    <input id="client_name" type="text" class="form-control{{ $errors->has('client_name') ? ' is-invalid' : '' }}" name="client_name" autofocus>

                                    @if ($errors->has('client_name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('client_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="client_status" class="col-md-4 col-form-label text-md-right">Client Status</label>
                                <div class="col-md-6">
                                    <select name="client_status" class="form-control">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="client_website" class="col-md-4 col-form-label text-md-right">{{ __('Client Website') }}</label>

                                <div class="col-md-6">
                                    <input id="client_website" type="text" class="form-control{{ $errors->has('client_website') ? ' is-invalid' : '' }}" name="client_website" autofocus>

                                    @if ($errors->has('client_website'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('client_website') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="client_address" class="col-md-4 col-form-label text-md-right">{{ __('Client Address') }}</label>

                                <div class="col-md-6">
                                    <input id="client_address" type="text" class="form-control{{ $errors->has('client_address') ? ' is-invalid' : '' }}" name="client_address" autofocus>

                                    @if ($errors->has('client_address'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('client_address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="client_city" class="col-md-4 col-form-label text-md-right">{{ __('Client City') }}</label>

                                <div class="col-md-6">
                                    <input id="client_city" type="text" class="form-control{{ $errors->has('client_city') ? ' is-invalid' : '' }}" name="client_city" autofocus>

                                    @if ($errors->has('client_city'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('client_city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="client_state" class="col-md-4 col-form-label text-md-right">{{ __('Client State') }}</label>

                                <div class="col-md-6">
                                    <input id="client_state" type="text" class="form-control{{ $errors->has('client_state') ? ' is-invalid' : '' }}" name="client_state" autofocus>

                                    @if ($errors->has('client_state'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('client_state') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="client_zip" class="col-md-4 col-form-label text-md-right">{{ __('Client Zip Code') }}</label>

                                <div class="col-md-6">
                                    <input id="client_zip" type="text" class="form-control{{ $errors->has('client_zip') ? ' is-invalid' : '' }}" name="client_zip" autofocus>

                                    @if ($errors->has('client_zip'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('client_zip') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="client_phone" class="col-md-4 col-form-label text-md-right">{{ __('Client Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="client_phone" type="text" class="form-control{{ $errors->has('client_phone') ? ' is-invalid' : '' }}" name="client_phone" autofocus>

                                    @if ($errors->has('client_phone'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('client_phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="client_notes" class="col-md-4 col-form-label text-md-right">{{ __('Client Notes') }}</label>

                                <div class="col-md-6">
                                    <input id="client_notes" type="text" class="form-control{{ $errors->has('client_notes') ? ' is-invalid' : '' }}" name="client_notes" autofocus>

                                    @if ($errors->has('client_notes'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('client_notes') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create New Client') }}
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
