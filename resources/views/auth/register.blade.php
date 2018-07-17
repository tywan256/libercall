@extends('theme.default')

@section('content')

<!--====================================================
                        PAGE CONTENT
======================================================--> 
<div class="overlay-contact-h"></div>
<section id="getinvite" class="bg-parallax contact-h-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-md-6">
          <div class="contact-h-cont">
            <h3 class="cl-white">Register new account</h3><br>
            
            <form method="POST" action="{{ route('updateuser') }}" aria-label="{{ __('Register') }}">
                        {{ csrf_field() }}

                                @if (Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                                @endif

                <div class="form-group">
                  <label for="name" class="cols-sm-2 control-label">Full Name</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                      
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                    </div>
                  </div>
                </div>
  
                <div class="form-group">
                  <label for="email" class="cols-sm-2 control-label">Email Address</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                      
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                    </div>
                  </div>
                </div>

                <div class="form-group">
                    <label for="mobile" class="cols-sm-2 control-label">Phone Number</label>
                    <div class="cols-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                        
                          <input id="mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" >

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif

                      </div>
                    </div>
                  </div>

                <div class="form-group">
                  <label for="invitationcode" class="cols-sm-2 control-label">Invite Code</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-qrcode fa" aria-hidden="true"></i></span>
                      
                        <input id="invitationcode" type="text" class="form-control{{ $errors->has('invitationcode') ? ' is-invalid' : '' }}" name="invitationcode" value="{{ old('invitationcode') }}" >

                                @if ($errors->has('invitationcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('invitationcode') }}</strong>
                                    </span>
                                @endif

                    </div>
                  </div>
                </div>
  
                <div class="form-group">
                  <label for="password" class="cols-sm-2 control-label">Password</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                      
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                    </div>
                  </div>
                </div>
  
                <div class="form-group">
                  <label for="confirm_password" class="cols-sm-2 control-label">Confirm Password</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                      
                        <input id="password-confirm" type="password" class="form-control{{ $errors->has('confirm_password') ? ' is-invalid' : '' }}" name="confirm_password">

                                @if ($errors->has('confirm_password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('confirm_password') }}</strong>
                                    </span>
                                @endif

                    </div>
                  </div>
                </div>
  
                <div class="form-group ">
                  
                    <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>

                </div> 
              </form>
          </div>
      </div>
      <div class="col-md-3">
        
      </div>
    </div>
  </div>         
</section>

@endsection