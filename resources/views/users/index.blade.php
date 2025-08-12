@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('users') }}</div>

                    <div class="card-body">
                        <a href="{{route('users.create')}}" class="btn btn-success">Create User</a>
                        <table class="table">
                            <thead>
                                <tr>

                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Roles</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr>

                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @foreach($user->getRoleNames() as $role)
                                            <button class="btn btn-success btn-sm">{{$role}}</button>
                                            @endforeach
                                        </td>
                                        <td>
                                            <form action="{{route('users.destroy',$user->id)}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{route('users.show',$user->id)}}" class="btn btn-primary btn-sm">show</a>

                                            <button  class="btn btn-danger btn-sm">Delete</button>
                                        
                                             </form>


                                        </td>
                                 

                                        </tr>
                                @endforeach


                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
