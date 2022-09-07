@extends('layouts.user')
@section('content')

  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">My Wheels</span></h2>
          <p class="animate__animated fanimate__adeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <div class="d-flex ww-banner-btn">
          @guest
          @if (Route::has('login')) 
          <a href="{{ route ('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Signup</a>
          @endif
          @if (Route::has('login'))
          <a href="{{ route ('login') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a>
          @endif
          @else
          <a href="{{ route ('logout') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Logout</a>
          @endguest
          <a href="{{ route ('wealth_wheel') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Create Wealth Wheel</a>
          </div>
        </div>
      </div>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section>

  <section id="our-products" class="our-products avl-wealthWheel">
      <div class="container">
        <div class="row content" data-aos="fade-up">
          <div class="col-lg-9">
            <div class="row">
            <h3>My Wheels:</h3>
            <hr>
            @forelse($my_whells as $wheel)
              <div class="ww-avl-card col-md-4 my-2">
                <div class="card">
                  <div  class="ww-card-tag">
                    <span>Available Now</span>
                  </div>
                  
                  <img style="height: 250px; width:310px"  src="{{ asset('assets/img/ww-pic.png') }}" alt="no img" class="img-fluid">
                  <div class="card-body">
                    <h5 class="card-title">WW0{{ $wheel->wheel_number }}</h5>


                    <p class="card-text">Last Cog Number: {{$wheel->wallet->count()}}</p>
                    <div class="pro-price">
                      <h4>Cog Price : <span>US${{$wheel->cog_price}}</span></h4>
                    </div> 
                    <a href="{{url('wheels_details?id=' .$wheel->id) }}" class="pro-dtl-btn">Join Wealth Wheel</a>

                    <!-- <a href="{{route('wheels_details', ['id' =>encrypt($wheel->id)])}}"  class="pro-dtl-btn">Join Wealth Wheel</a> -->
                  </div>
                </div>
              </div>
              @empty
              <h4>No wheel available</h4>
              @endforelse


              <h3 class="pt-4 mt-4">Purchased Wheels:</h3>
            <hr>

            @forelse($purchased_whells as $wheel)
              <div class="ww-avl-card col-md-4 my-2">
                <div class="card">
                  <div  class="ww-card-tag">
                    <span>Available Now</span>
                  </div>
                 
                  
                  <img style="height: 250px; width:310px"  src="{{ asset('assets/img/ww-pic.png') }}" alt="no img" class="img-fluid">
                  
                  <div class="card-body">
                    <h5 class="card-title">WW0{{ $wheel->purchase_wheel->wheel_number }}</h5>

                    <p class="card-text">Last Cog Number: {{$wheel->purchase_wheel->wallet->count()}}</p>
                    <div class="pro-price">
                      <h4>Cog Price : <span>US${{$wheel->purchase_wheel->cog_price}}</span></h4>
                    </div> 
                    <button class="pro-dtl-btn">Join Wealth Wheel</button>

                  </div>
                </div>
              </div>
              @empty
              <h4>No wheel available</h4>
              @endforelse
             
            
             
             
             
              
              
            </div>
          </div>
        </div>
      </div>
    </section>

  @endsection