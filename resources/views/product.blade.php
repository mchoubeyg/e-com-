
@extends('layout.master')
@section('title','product')

@section('body')
<link href="/css/product.css" rel="stylesheet">


<div class="custom-product">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
  @for($i=1; $i < 5;$i++)
    
    <div class="carousel-item {{$products[$i]['id']==2?'active':''}}">
      <a href="detail/{{$products[$i]['id']}}">
      <img class="slider-img ml-4" src="{{$products[$i]['gallery']}}" class="w-100" alt="...">
    
    <div class="carousel-caption cols">
      <h3> {{$products[$i]['name']}}</h3>
      <p> {{$products[$i]['description']}}</p>
    </div>
      </a>
    </div>
  
    @endfor
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>

</div>





<div class="py-2">
  <div class="container">
    <div class="row">
      <h2 class="text-light colrs">Trending products</h2>
      <div class="owl-carousel mobile-carousel owl-theme text-success">
  @foreach($products4 as $item)
<div class="item">
        <div class="slider">
      
            <div class="image">
                <img src="{{$item['gallery']}}">
    
                <div class="Button">
                    <a href="detail/{{$item['id']}}" class="btns">View Detail</a>
                </div>
            </div>
    
            <div class="product-details">
                <div class="product-name">
                    <a href="#">{{$item['name']}}</a>
                    <span></span>
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
      <h2 class="text-light colrs">Recently Launched</h2>
      <div class="owl-carousel mobile-carousel owl-theme text-success">
    @foreach($products2 as $item)
<div class="item">
        <div class="slider">
      
            <div class="image">
                <img src="{{$item['gallery']}}">
    
                <div class="Button">
                    <a href="detail/{{$item['id']}}" class="btns">View Detail</a>
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
      <h2 class="text-light colrs">Discount Products</h2>
      <div class="owl-carousel mobile-carousel owl-theme text-success">
    @foreach($products3 as $item)
<div class="item">
        <div class="slider">
      
            <div class="image">
                <img src="{{$item['gallery']}}">
    
                <div class="Button">
                    <a href="detail/{{$item['id']}}" class="btns">View Detail</a>
                </div>
            </div>
    
            <div class="product-details">
                <div class="product-name">
                    <a href="#">{{$item['name']}}</a>
                <span>  <del> 10 % off</del> 20% off</span>
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






<section id="offer">

  <div class="heading">Service Provides</div>

  <div class="images">
  <div class="row">
  <div class="col-4">
    <div class="box">
      <img src="images/icon1.png" alt="">
      <h3>free shipping</h3>
    </div>
</div>
<div class="col-4">
    <div class="box">
      <img src="images/icon2.png" alt="">
      <h3>easy payments</h3>
    </div>
</div>
<div class="col-4">
    <div class="box">
      <img src="images/icon3.png" alt="">
      <h3>10 days replacements</h3>
    </div>
</div>
</div>
  </div>
</section>





<section id="social">
    <div class="container">
    <h1 class="text-center">FIND US ON SOCIAL MEDIA</h1>
    <div class="text-center">
    <a href=""><img src="/images/facebook-icon.png"  class="social-img"></a>
    <a href=""><img src="/images/instagram-icon.png" class="social-img"></a>
    <a href=""><img src="/images/linkedin-icon.png"  class="social-img"></a>
    <a href=""><img src="/images/snapchat-icon.png"  class="social-img"></a>
    <a href=""><img src="/images/twitter-icon.png"   class="social-img"></a>
    <a href=""><img src="/images/whatsapp-icon.png"  class="social-img"></a>
    </div>
    </div>
    </section>





<section  class="newsletter" id="newsletterid">
  <div class="container headings text-center">
<h1 class="text-center">SUBSCRIBE TO OUR NEWSLETTER</h1>
</div>
<div class="container"> 
  <div class="row">
    <div class="col-lg-8 offset-lg-2 col-12">
<div class="input-group mb-3">
    <input type="text" class="form-control news-letter" placeholder="Your Email">
    <div class="input-group-append">
      <button class="input-group-text active">Subscribe</button>
    </div>
  </div>
  </div>

</div> 
  </div>
</section>





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




