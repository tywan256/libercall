@extends('theme.default')

@section('content')

<!--====================================================
                        PAGE CONTENT
======================================================--> 
<div class="overlay-contact-h"></div>
<section id="login" class="bg-parallax contact-h-bg">
  <div class="container">
    <div class="row">
        <div class="col-md-3">
        
        </div>
      <div class="col-md-6">
        <div class="contact-h-cont">
          <h3 class="cl-white">{{ __('Reset Password') }}</h3><br>

          <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        {{ csrf_field() }}

                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

              <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">{{ __('E-Mail Address') }}</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-evelope" aria-hidden="true"></i></span> 

                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                  </div>
                </div>
              </div>

              <div class="form-group">
                
                    <button type="submit" class="btn btn-success">
                                    {{ __('Send Password Reset Link') }}
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