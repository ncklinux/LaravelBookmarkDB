@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 mt-4">
                <add-folder :language="{{ json_encode(__('components.new_folder')) }}" />
            </div>
            <div class="col-xs-12 col-sm-6 mt-4">
                <add-bookmark :language="{{ json_encode(__('components.new_bookmark')) }}" />
            </div>
        </div>
    </div>
@endsection
