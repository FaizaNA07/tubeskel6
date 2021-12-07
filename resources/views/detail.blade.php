@extends('layouts.app')

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<br><br><br><br>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $products->package }}</h3>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center"><img width="435px" src="{{asset('storage/'.$products->images)}}" class="img-responsive"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h4 class="box-title mt-5">Product description</h4>
                    <div class="card-body">
                            Food : {{ $products->food }} <br>
                            Dessert : {{ $products->dessert }} <br>
                            Drink : {{ $products->drink }} <br>
                            Price : {{ $products->price }} <br>
                    </div>
                    <button class="btn btn-primary btn-rounded">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

