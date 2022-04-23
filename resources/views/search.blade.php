@extends('layout.master')
@section('title','product')

@section('body')


<div class=" custom-product">
  <div class="row">
    <div class="col-sm-4">
    <a href="#">Filter</a>
</div>

<div class="col-sm-4">
  <div class="trending-wrapper">
  <h4>Result for Products</h4>
  @foreach ($products as $item)
    <div class="searched-item">
    <a href="detail/{{$item['id']}}">
      <img  class="searched-image" src="{{$item['gallery']}}">
      <div class="">
        <h3>{{$item['name']}}</h3>
        <h5>{{$item['price']}}</h5>
      
      </div>
    </a>
    </div>

  @endforeach
  </div>
</div>
  </div>
</div>

@endsection