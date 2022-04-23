@extends('layout.master')
@section('title','Registration Page')

@section('body')


<link href="/css/p_regis.css" rel="stylesheet">
<section class="vh-90 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" >
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="{{route('register-user')}}" method="post">
              @csrf
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif


                <div class="form-outline mb-3">
                <span class="alert-danger">@error('name'){{$message}}@enderror</span>
                  <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg"  />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>


                <div class="form-outline mb-3">
                <span class=" alert-danger">@error('email'){{$message}}@enderror</span>
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>


                <div class="form-outline mb-3">
                <span class=" alert-danger">@error('password'){{$message}}@enderror</span>
                  <input type="password" name="password"  id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>


                <div class="form-outline mb-3">
                <span class=" alert-danger">@error('Confirm_password'){{$message}}@enderror</span>
                  <input type="password" name="Confirm_password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Confirm password</label>
                </div>


                <div class="form-check d-flex  mb-4">
                <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example3cg"
                  />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="login" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection