@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Create') }}</div>

                    <div class="card-body">
                        <a href="{{ route('users.index') }}" class="btn btn-success mt-8">Back</a>


                        <form action="{{route('users.update',$user->id)}}" method="post">


                            @csrf
                            @method("put")

                            


                            {{-- name --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleInputname"
                                    aria-describedby="emailHelp" placeholder="Enter Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- email --}}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputemail"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- password --}}


                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="password" value="{{$user->password}}" class="form-control" id="exampleInputpassword"
                                    aria-describedby="emailHelp" placeholder="Enter password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
