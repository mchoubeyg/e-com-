@extends('layout.master')
@section('title','product')

@section('body')


<br>
<div class="detail">
<div class="row">
  <div class="col-sm-6">
      <img class="detail-img" src="{{$product['gallery']}}" alt="">
  </div>
  <div class="col-sm-6">
        <br>
        <h2>{{$product['name']}}</h2>
        <h3>Price: ₹ {{$product['price']}}</h3>
        <h5>Details: {{$product['description']}}</h5>
   
        <br>
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value= "{{$product['id']}}">
            <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br>
        
        <br><br>
  </div>
  </div>
</div>
</div>
@endsection