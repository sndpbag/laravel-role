@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Product Create') }}</div>

                    <div class="card-body">
                        <a href="{{ route('products.index') }}" class="btn btn-success mt-8">Back</a>


                        <form action="{{route('products.store')}}" method="post">


                            @csrf

                            


                            {{-- name --}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input type="text" name="product" class="form-control" id="exampleInputProduct"
                                    aria-describedby="emailHelp" placeholder="Enter Name">
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
