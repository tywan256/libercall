@extends('theme.default')

@section('content')

<!--====================================================
                         HOME
======================================================-->
    <section id="home">
      <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel"> 
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active slides">
              <div class="overlay"></div>
              <div class="slide-1"></div>              
                <div class="hero ">
                  <hgroup class="wow1 fadeInUp">
                      <h1>Free local calls</h1>        
                      <h3>Call your friends and family for free.</h3>
                  </hgroup>
                  <a href="#getinvite" class="btn btn-green wow fadeInUp" role="button">Request Invite Code</a>
                </div>           
            </div> 
        </div>
      </div> 
    </section> 

<!--====================================================
                        FEATURES
======================================================-->
    <section id="features" class="features">
      <div class="container">
        <div class="row title-bar">
          <div class="col-md-12">
            <h1 class="wow fadeInUp">Enjoy free local calls</h1>
            <div class="heading-border"></div>
            <p class="wow fadeInUp" data-wow-delay="0.4s">Say good bye to your call bills, and start making free local calls. 
            NO Internet (Data Bundle / Wifi) required and NO Apps required to make calls. Its simple, follow instructions and call using your own phone.</p>
          </div>
          
          <div class="col-md-4 desc-comp-offer wow fadeInUp" data-wow-delay="0.4s">
            <div class="desc-comp-offer-cont">
              <h3>Step 1</h3>
              <p class="desc">Request an invite code from us, then register using the received code.</p>
            </div>
          </div>
          
          <div class="col-md-4 desc-comp-offer wow fadeInUp" data-wow-delay="0.6s">
            <div class="desc-comp-offer-cont">              
              <h3>Step 2</h3>
              <p class="desc">Watch short promotional Video and get free credits to your account.</p>
            </div>
          </div>
          <div class="col-md-4 desc-comp-offer wow fadeInUp" data-wow-delay="0.8s">
            <div class="desc-comp-offer-cont">
              <h3>Step 3</h3>
              <p class="desc">Dial our access number and use those free credits to make free local calls</p>
            </div>
          </div>
          
        </div>
        
      </div>
    </section>
    
@guest
<!--====================================================
                    GET INVITE CODE
======================================================-->
<div class="overlay-contact-h"></div>
<section id="getinvite" class="bg-parallax contact-h-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="contact-h-cont">
          <h3 class="cl-white">Request Invite Code</h3><br>

          <form method="POST" action="{{ route('requestcode') }}">

                        {{ csrf_field() }}

                                @if (Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                                @endif
                        
            <div class="form-group cl-white">
              <label for="name">Gender</label>
              <select class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
              
            </div>  
            <div class="form-group cl-white">
              <label for="exampleInputEmail1">Date of Birth</label>
              <input type="date" class="form-control{{ $errors->has('dateofbirth') ? ' is-invalid' : '' }}" name="dateofbirth" id="dateofbirth" aria-describedby="dateHelp" placeholder="Enter date of birth">
                                @if ($errors->has('dateofbirth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dateofbirth') }}</strong>
                                    </span>
                                @endif

            </div>  
            <div class="form-group cl-white">
              <label for="subject">Country</label>
              <select class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" id="country">
                <option value="Tanzania">Tanzania</option>
                <option value="Ugana">Uganda</option>                
                <option value="Zimbabwe">Zimbabwe</option>
              </select>
                                @if ($errors->has('country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif

            </div>
            <div class="form-group cl-white">
                <label for="subject">Mobile</label>
                <input type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" id="mobile" aria-describedby="mobileHelp" placeholder="Enter your mobile number"> 

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif

              </div>   
            <input type="submit" class="btn btn-general btn-white" value="Get Invite Code">
          </form>
        </div>
      </div>
    </div>
  </div>         
</section> 
@endguest
@endsection