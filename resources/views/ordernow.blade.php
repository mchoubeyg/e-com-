@extends('layout.master')
@section('title','Mobiles')

@section('body')
<link href="/css/style.css" rel="stylesheet">
<div class="container">
<div class=" custom-product">

<div class="col-sm-10">
<table class="table mt-5">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>Rs {{$total}}</td>
        
      </tr>
      <tr>
        <td>Tax</td>
        <td>Rs 0</td>

      </tr>
      <tr>
        <td>Delivery</td>
        <td>Rs 0</td>
        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>Rs {{$total+0}}</td>

      </tr>
    </tbody>
  </table>
  <div>


  
<br>
<div>
  <section class="address">
  <form class="row g-3"  action="/orderplace" method="POST">
    @csrf

    <div class="col-md-6">
      <label  class="form-label">First name</label>
      <input type="text" name="name" class="form-control" >
      <span class=" alert-danger">@error('name'){{$message}}@enderror</span>
      
    </div>
    <div class="col-md-6">

      <label  class="form-label" >Last name</label>
    <input type="text"  name="last" class="form-control" >

    
    
    </div>
    <div class="col-md-12">
      <label  class="form-label">Email</label>
        <input type="email" name="email" class="form-control"  > 
        <span class=" alert-danger">@error('email'){{$message}}@enderror</span>
    </div>

    <div class="col-md-6">
      <label  class="form-label">Address</label>
      <input type="text" name="address" class="form-control">
      <span class=" alert-danger">@error('address'){{$message}}@enderror</span>
      
    </div>
    <div class="col-md-6">
      <label  class="form-label">Pincode</label>
      <input type="text" name="pincode" class="form-control"  >
      <span class=" alert-danger">@error('pincode'){{$message}}@enderror</span>
      
    </div>
    <div class="col-md-12">
      <label  class="form-label">Country</label>
      <input type="text" name="country" class="form-control"  >
      <span class=" alert-danger">@error('country'){{$message}}@enderror</span>
      
    </div>
    <div class=" ">
  <label for="pwd " >Payment Method:</label><br>
    <input type="radio" class="" value="cash" name="payment"><span>Online Payment</span><br>
    <input type="radio" value="cash" name="payment"><span>EMI</span><br>
    <input type="radio" value="cash" name="payment"><span>Cash on delivery</span>
  </div> <br>
  <span class=" alert-danger">@error('payment'){{$message}}@enderror</span>
    <button class="btn btn-primary submit" type="submit" style="text-align: center;">PLACE ORDER</button>
      
  </form>
  </section>
</div>

  
  </div>
</div>
</div>
</div>
@endsection
