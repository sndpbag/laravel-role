@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('product update') }}</div>

                    <div class="card-body">
                        <a href="{{ route('products.index') }}" class="btn btn-success mt-8">Back</a>


                        <form action="{{route('products.update',$products->id)}}" method="post">


                            @csrf
                            @method("put")

                            


                            {{-- name --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">product Name</label>
                                <input type="text" name="product" value="{{$products->product}}" class="form-control" id="exampleInputname"
                                    aria-describedby="emailHelp" placeholder="Enter Product name">
                                @error('product')
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
