@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Catering Pernikahan | Wedding | Prasmanan</h4>
            <h2>Get your best foods</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <h2 class="active" data-filter="*">All Menu 
                <!--fitur search data-->
                <div class="row">
                        <form action="/product" class="form-inline" method="get">
                            <div class="form-group mx-sm-3 mb-3">
                                <input name="keyword" type="text" class="form-control" placeholder="Package">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default mb-3">search</button>
                            </div>
                        </form>
                </div>
              </h2> 
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                @foreach($products as $p)
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="/product/{{$p->id}}"><img src="{{asset('storage/'.$p->images)}}" alt=""></a>
                        <div class="down-content">
                          <a href="/product/{{$p->id}}"><h4>{{$p -> package}}</h4></a>
                          <h4>Rp {{$p -> price}}</h4>
                          <br></br>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (12)</span>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection