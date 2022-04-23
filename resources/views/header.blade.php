   
<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
$total = ProductController::cartItem();
}
?>



                                                          <!--   Navbar Section   -->

<section class="mb-5" >
  <nav class="navbar navbar-expand-lg navbar-light  fixed-top headers">
  
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-0 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light " aria-current="page" href="/"><i class="fa fa-fw fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-light" href="/myorders">My Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-light" href="/mobiles">Electronics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-light" href="/fashion">Fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-light" href="/contact">Contact Us</a>
        </li>

<form  action="/search" class="d-flex">
        <input class="form-control me-2 ml-3 mr-2" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger" type="submit">Search</button>
      </form>
    
      </ul>

      <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
          <a class="nav-link  text-light" href="/cartlist"><i class='fas fa-shopping-cart'></i> Cart({{$total}})</a>
        </li>
        @if(Session::has('user'))
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
            
          </ul>
        </li>
        @else
      <li class="nav-item">
          <a  class="nav-link text-light" href="/login"><i class="fa fa-fw fa-user"></i>Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-light" href="/registration"></i>Register</a>
        </li>
      @endif
</ul>

</div>
  </nav>
  </section>
                                                    <!--    End of navbar section -->
