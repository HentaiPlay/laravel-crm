@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
        <div class="col-12">
          <h4 class="font-weight-bold mt-5 mb-3">Go to the control panel:</h4>
          <a href="/companies">companies</a><br>
          <a href="/employees">employees</a>
        </div>
    </div>
</div>
@endsection
