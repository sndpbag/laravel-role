@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Display User Details') }}</div>

                    <div class="card-body">
                        <a href="{{ route('users.index') }}" class="btn btn-success mt-8">Back</a>


                        <p> <strong>Name</strong>{{$user->name}}</p>
                        <p> <strong>Email</strong>{{$user->email}}</p>
          

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
