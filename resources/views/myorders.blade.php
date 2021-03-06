@extends('layout.master')
@section('title','product')

@section('body')

<div class="my-orders">
  <div class="col-sm-10">
    <div class="trending-wrapper">
  <h2>My Orders</h2>
  <br>
  @foreach ($orders as $item)
    <div class="row searched-item cart-list-divider">
    <div class="col-sm-3">
    <a href="detail/{{$item->id}}">
      <img  class="cartlist-image" src="{{$item->gallery}}">
      
    </a>
    </div>

    <div class="col-sm-4">
      <div class="">
        <h2>Name: {{$item->name}}</h2>
        <h5>Delivery Status: {{$item->status}}</h5>
        <h5>Payment Status: {{$item->payment_status}}</h5>
        <h5>Payment Method: {{$item->payment_method}}</h5>
        <h5>Address: {{$item->address}}</h5>
        <h5>Pincode: {{$item->pincode}}</h5>
        <h5>Country: {{$item->country}}</h5>
      </div>
    
    </div>

    </div>

  @endforeach
    
  </div>
</div>

</div>

@endsection