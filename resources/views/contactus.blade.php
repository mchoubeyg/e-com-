@extends('layout.master')
@section('title','product')

@section('body')

<link rel="stylesheet" href="/css/contact.css">
<section  class="contactus" id="contactid">
  <div class="container headings text-center">
<h1 class="text-center">CONTACT US</h1>
<p class="text-center">We're here to help and answer any question </p>
</div>


<div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1 " >
          <form action="/contact" method="post">
          @csrf
          <div class=" alert-success">{{Session::get('message_sent')}} </div> <br>
        <div class="form-group">
      <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Enter Your Name"  >
      <span class="alert-danger">@error('name'){{$message}}@enderror</span>
      </div>

        <div class="form-group">
        <input type="email" class="form-control" id="exampleInputEmail1" name="email"  placeholder="Enter email" >
        <span class="alert-danger">@error('email'){{$message}}@enderror</span>
      </div>
  
  <div class="form-group">
    <textarea  type="text" class="form-control" rows="4"  name="message" placeholder="Enter Your Message"></textarea>
    <span class="alert-danger">@error('message'){{$message}}@enderror</span>
    
  </div>
  <div class="d-flex justify-content-center button-form ">
  <button type="submit" class="btn btn-primary ">Submit</button>
</div>
</form>
    </div>
  </div>
</div>
</section>


@endsection