@extends('layouts.app')
 
@section('title', $brand->brand_name)
 
@section('content')
    <h3>{{ $brand->brand_name }}</h3>
    <p>{{ $brand->description }}</p>
    <p>{{ $brand->top5_flag }}</p>
    <div class="row">
        @foreach ($brand->items as $item)
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->item_name }}</h5>
                    <p class="card-text">{{ $item->brand->brand_name }}</p>
                    <p class="card-text">Rp. {{ $item->price }},-</p>
                    <a href="/items/{{ $item->id }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection