@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3"> 
            <div class="dashboard-sidebar">
                <h2>{{ __('Publisher') }}</h2>
                <p>{{ __('Selamat datang dihalaman Publisher') }}</p>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection