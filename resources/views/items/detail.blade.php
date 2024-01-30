@extends('layouts.app')
 
@section('title', $item->item_name)
 
@section('content')
    <h3>Detail</h3>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $item->item_name }}</h5>
            <p class="card-text">{{ $item->brand->brand_name }}</p>
            <p class="card-text">Rp. {{ $item->price }}/piece </p>
            <p class="card-text">Description:</p>
            <p class="card-text">{{ $item->description }}</p>
        </div>
    </div>
@endsection