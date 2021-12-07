@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDIT MENU') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/admin/{{$products->id}}" method="post"> 
                        {{csrf_field()}}
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$products->id}}"></br>
                        <div class="form-group">
                            <label for="package">Package</label>
                            <input type="text" class="form-control" required="required" name="package" value="{{$products->package}}"><br>
                        </div>
                        <div class="form-group"> 
                            <label for="food">Food</label>
                            <input type="text" class="form-control" required="required" name="food" value="{{$products->food}}"></br>
                        </div>
                        <div class="form-group">
                            <label for="dessert">Dessert</label>
                            <input type="text" class="form-control" required="required" name="dessert" value="{{$products->dessert}}"></br>
                        </div>
                        <div class="form-group">
                            <label for="drink">Drink</label>
                            <input type="text" class="form-control" required="required" name="drink" value="{{$products->drink}}"></br>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" required="required" name="price" value="{{$products->price}}"></br>
                        </div>
                        <div class="form-group">
                            <label for="images">Feature Image</label>
                            <input type="file" class="form-control" required="required" name="images" value="{{$products->images}}"></br>
                            <img width="150px" src="{{asset('storage/'.$products->images)}}">
                        </div> 
                            <button type="submit" name="edit" class="btn btn-primary float-right">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
