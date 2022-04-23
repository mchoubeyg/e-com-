@extends('layout.master')
@section('title','Login page')

@section('body')



<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="{{route('login-user')}}" method="post">
        @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
              @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
          <span class=" alert-danger">@error('email'){{$message}}@enderror</span>
            <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Email address</label>


          </div>

          <!--  Password input-->
          <div class="form-outline mb-4">
          <span class=" alert-danger">@error('password'){{$message}}@enderror</span> 
            <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>

          </div>

          <div class="a">
          
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="form1Example3"
                checked
              />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            
                <br>
                <br>
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
         <br><br>
        <p>Don't have an account? <a href="registration">Register here </a></p>


</form>
      </div>
    </div>
  </div>
</section>

@endsection