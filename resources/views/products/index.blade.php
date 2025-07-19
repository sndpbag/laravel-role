@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('products') }}</div>

                    <div class="card-body">
                        <a href="{{route('products.create')}}" class="btn btn-success">Create product</a>
                        <table class="table">
                            <thead>
                                <tr>

                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                 
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($products as $product)
                                    <tr>

                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->product }}</td>
                                         
                                        <td>
                                            <form action="{{route('products.destroy',$product->id)}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{route('products.show',$product->id)}}" class="btn btn-primary btn-sm">show</a>

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
