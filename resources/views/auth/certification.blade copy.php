@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Email verification confirmation') }}</div>

                <div class="card-body">
                    {{ __('I sent an e-mail. please confirm.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
