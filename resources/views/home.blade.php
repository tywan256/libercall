@extends('theme.default')

@section('content')

<!--====================================================
                       HOME-P
======================================================-->
<div>
        <div id="card1" class="card">
            <div class="card-body">
                <h3 style="text-align: center;">Watch video to get your free credit</h3>
            </div>
        </div>
    </div>
<div class="container">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-7">
                <video class="video" id="video">
                    <source src="{{ asset('storage/video1.MP4') }}" type="video/mp4"/>
                </video> 
                <div class="playpause"></div>
            </div>
            <div class="col-lg-1">

            </div>
            <div class="col-lg-4">

                                @if (Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                                @endif
                                
                <div class="service-h-tab"> 
                        <nav class="nav nav-tabs" id="myTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Account</a>
                            <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">Profile</a> -->
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row mx-2">
                                        <div class="col-md-12 ">
                                            <div class="form-group row">
                                                <label for="example-text-input" style="width: 60px;" class=" col-form-label">Name :</label>
                                                <div>
                                                    <label for="name" style="margin-top:5px"><b><I>{{ Auth::user()->name }}</I></b></label> 
                                                <!-- <input class="form-control" type="text" value="{{ Auth::user()->name }}" id="example-text-input" readonly> -->
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label for="example-email-input" style="width: 60px;" class=" col-form-label">Email :</label>
                                                <div>
                                                    <!-- <input class="form-control" type="email" value="{{ Auth::user()->email }}" id="example-email-input" readonly> -->
                                                    <label for="email" style="margin-top:5px"><b><I>{{ Auth::user()->email }}</I></b></label> 
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row">
                                                <label for="example-date-input" style="width: 65px;" class=" col-form-label">DoB</label>
                                                <div>
                                                    <input class="form-control" type="date" value="2018-08-19" id="example-date-input" style="width: 215px;">
                                                </div>
                                            </div> -->
                                            <div class="form-group row">
                                                <label for="example-tel-input" style="width: 60px;" class=" col-form-label">Mobile :</label>
                                                <div>
                                                    <!-- <input class="form-control" type="tel" value="{{ Auth::user()->mobile }}" id="example-tel-input" readonly> -->
                                                    <label for="mobile" style="margin-top:5px"><b><I>{{ Auth::user()->mobile }}</I></b></label> 
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                    <label for="example-credit-input" style="width: 60px;" class=" col-form-label">Credit :</label>
                                                    <div>
                                                        <!-- <input class="form-control" type="text" value="{{ Auth::user()->credit }}" id="example-credit-input" readonly> -->
                                                        <label for="credit" style="margin-top:5px"><b><I>{{ Auth::user()->credit }}</I></b></label> 
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        </div>

            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
<br><br><br><br>
</div>


<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" action="{{ route('credituser') }}">

    {{ csrf_field() }}

    <div class="container-modal">

      <label for="uname"><b>You have 2mins of Calling. Dial *196*6*0788973633#</b></label>
      <input type="hidden" value="{{ Auth::user()->mobile }}"  name="mobile">
      <input type="hidden" value="{{ (Auth::user()->credit)+2 }}" name="credit">
        
      <button type="submit">GET CALLING CREDIT</button>
      
    </div>
  </form>
</div>

@endsection