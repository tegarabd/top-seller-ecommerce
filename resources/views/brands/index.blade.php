@extends('layouts.app')
 
@section('title', 'Top 5 Brands')
 
@section('content')
    <h3>Top 5 Brands</h3>
    <div class="row">
        @foreach ($brands as $brand)
        <div class="col-4">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">{{ $brand->brand_name }}</h5>
                    <a href="/brands/{{ $brand->id }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection