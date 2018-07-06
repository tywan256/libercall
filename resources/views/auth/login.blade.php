@extends('theme.default')

@section('content')

<!--====================================================
                        PAGE CONTENT
======================================================--> 
<div class="overlay-contact-h"></div>
<section id="login" class="bg-parallax contact-h-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 pull-center">
        <div class="contact-h-cont">
          <h3 class="cl-white">I already have an account</h3><br>

          <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        {{ csrf_field() }}

                        @if(session()->has('login_error'))
                        <div class="alert alert-success">
                          {{ session()->get('login_error') }}
                        </div>
                        @endif

              <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Mobile</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>

                    <input id="mobile" type="mobile" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" autofocus>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif

                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Password</label>
                <!-- <div class="cols-sm-10"> -->
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                @if ($errors->has('password'))
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif

                  </div>
                <!-- </div> -->
              </div>

              <div class="form-group">
                
                <div class="cols-sm-10">
                  <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                                
                  </div>
                </div>
              </div>

              <div class="form-group">
                
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>

              </div>
                
            </form>
        </div>
      </div>
    </div>
  </div>         
</section>

@endsection