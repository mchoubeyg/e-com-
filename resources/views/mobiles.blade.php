@extends('layout.master')
@section('title','Mobiles')

@section('body')

<link href="/css/mobile.css" rel="stylesheet">


<div class="py-4">
    <div class="container">
        <div class="row">
        <h2 class="text-light">Mobiles</h2>
        <div class="owl-carousel mobile-carousel owl-theme text-success">
@foreach($products as $item)
<div class="item">
        <div class="slider">

            <div class="image">
                <img src="{{$item['gallery']}}">
    
                <div class="Button">
                    <a href="detail/{{$item['id']}}" class="btns">View Details</a>
                </div>
            </div>
    
            <div class="product-details">
                <div class="product-name">
                    <a href="#">{{$item['name']}}</a>
                    <span>New Arrival</span>
                </div>
                <a href="#" class="price">₹ {{$item['price']}}</a>
            </div>

        </div>
        </div>
@endforeach
            </div>
        </div>
    </div>
</div>






<div class="py-2">
    <div class="container">
        <div class="row">
        <h2 class="text-light">Telivision</h2>
        <div class="owl-carousel mobile-carousel owl-theme text-success">
@foreach($products2 as $item)
<div class="item">
        <div class="slider">

            <div class="image">
                <img src="{{$item['gallery']}}">
    
                <div class="Button">
                    <a href="detail/{{$item['id']}}" class="btns">View Details</a>
                </div>
            </div>
    
            <div class="product-details">
                <div class="product-name">
                    <a href="#">{{$item['name']}}</a>
                    <span>New Arrival</span>
                </div>
                <a href="#" class="price">₹ {{$item['price']}}</a>
            </div>

        </div>
</div>
@endforeach
            </div>
        </div>
    </div>
</div>




<div class="py-2">
    <div class="container">
        <div class="row">
            <h2 class="text-light">Laptops</h2>
            <div class="owl-carousel mobile-carousel owl-theme text-success">
@foreach($products3 as $item)
<div class="item">
        <div class="slider">

            <div class="image">
                <img src="{{$item['gallery']}}">
    
                <div class="Button">
                    <a href="detail/{{$item['id']}}" class="btns">View Details</a>
                </div>
            </div>
    
            <div class="product-details">
                <div class="product-name">
                    <a href="#">{{$item['name']}}</a>
                    <span>New Arrival</span>
                </div>
                <a href="#" class="price">₹ {{$item['price']}}</a>
            </div>

        </div>
</div>
@endforeach
            </div>
        </div>
    </div>
</div>






<div class="py-2">
    <div class="container">
        <div class="row">
            <h2 class="text-light">Washing Machines</h2>
            <div class="owl-carousel mobile-carousel owl-theme text-success">
@foreach($products4 as $item)
<div class="item">
        <div class="slider">

            <div class="image">
                <img src="{{$item['gallery']}}">
    
                <div class="Button">
                    <a href="detail/{{$item['id']}}" class="btns">View Details</a>
                </div>
            </div>
    
            <div class="product-details">
                <div class="product-name">
                    <a href="#">{{$item['name']}}</a>
                    <span>New Arrival</span>
                </div>
                <a href="#" class="price">₹ {{$item['price']}}</a>
            </div>

    </div>
</div>
        @endforeach
            </div>
        </div>
    </div>
</div>




<div class="py-2">
    <div class="container">
        <div class="row">
            <h2 class="text-light">Refrigerator</h2>
            <div class="owl-carousel mobile-carousel owl-theme text-success">
@foreach($products5 as $item)
<div class="item">
        <div class="slider">

            <div class="image">
                <img src="{{$item['gallery']}}">
    
                <div class="Button">
                    <a href="detail/{{$item['id']}}" class="btns">View Details</a>
                </div>
            </div>
    
            <div class="product-details">
                <div class="product-name">
                    <a href="#">{{$item['name']}}</a>
                    <span>New Arrival</span>
                </div>
                <a href="#" class="price">₹ {{$item['price']}}</a>
            </div>
        
        </div>
</div>
@endforeach
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')

<script>
$('.mobile-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3

        }
    }
})
</script>

@endsection
