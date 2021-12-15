@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('PRODUK BARU ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        
                     <!--fitur search data-->
                     <div class="card-body">
                        <form action="/admin" class="form-inline" method="get">
                            <div class="row">
                                <div class="form-group mx-sm-3 mb-3">
                                    <input name="keyword" type="text" class="form-control" placeholder="package">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mb-3">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th>Images</th>
                                        <th>Package</th>
                                        <th>Food</th>
                                        <th>Dessert</th>
                                        <th>Drink</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $p)
                                    <tr>
                                        <td>{{ $p->id}}</td>
                                        <td><img src="{{asset('storage/'.$p->images)}}" width='120px'></td>
                                        <td>{{ $p->package }}</td>
                                        <td>{{ $p->food }}</td>
                                        <td>{{ $p->dessert }}</td>
                                        <td>{{ $p->drink }}</td>
                                        <td>
                                            <form action="/admin/{{$p->id}}" method="post"> 
                                            
                                                <a href="/admin/{{$p->id}}/edit" class="btn btn-warning">Edit</a>
                                                <br>
                                                @csrf
                                                <br>
                                                @method('DELETE')
                                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
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
    </div>
</div>
@endsection