@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Role Create') }}</div>

                    <div class="card-body">
                        <a href="{{ route('roles.index') }}" class="btn btn-success mt-8">Back</a>


                        <form action="{{route('roles.update',$role->id) }}" method="post">


                            @csrf
                            @method("PUT")

                            


                            {{-- name --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Role Name</label>
                                <input type="text" name="name" value="{{$role->name}}" class="form-control" id="exampleInputProduct"
                                    aria-describedby="emailHelp" placeholder="Enter Role">
                                @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>



                                    <div class="form-group">
                                <label for="exampleInputEmail1" class="block">permission</label>
                                 
                                     
                                    @foreach ($permissions as $permission)
                                          
                                         <label>
                                         <input type="checkbox" name="permissions[{{$permission->name}}]" {{$role->hasPermissionTo($permission->name) ? 'checked': ''}} value="{{$permission->name}}"  id="exampleInputProduct"
                                     >{{$permission->name}} <label>
                                    @endforeach
                             
                                @error('permission')
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
