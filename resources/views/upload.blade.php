@extends('theme.default')

@section('content')
<div class="page-content d-flex align-items-stretch">
    <nav class="side-navbar">
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{ asset('theme/img/avatar-1.jpg')}}" alt="My Photo" class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h4">{{ Auth::user()->name }}</h1>
            </div>
        </div>
        <hr>
        <!-- Sidebar Navidation Menus-->
        <ul class="list-unstyled">    
            <li> <a href="{{ url('/dashboard') }}"> <i class="fa fa-bar-chart"></i>Statistics </a></li>
            <li class="active"> <a href="{{ url('/upload') }}"> <i class="fa fa-upload"></i>Upload video/audio </a></li>
        </ul>
    </nav>
    

    <div class="row" id="videoupload">
      <div class="col-lg-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Upload Advert</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Adverts</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <form id="videoform" method="POST" action="{{ route('uploadadvert') }}" enctype="multipart/form-data">

                    {{ csrf_field() }}

                          @if (Session::has('success'))
                          <div class="alert alert-success">
                              <p>{{ Session::get('success') }}</p>
                          </div>
                          @endif
                      <div class="form-group">
                        <label for="exampleInputEmail1">Advert Title</label>
                        <input type="text" class="form-control" name="advert_title" aria-describedby="emailHelp" placeholder="Enter advert name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea class="form-control" name="description" placeholder="Enter brief description"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Choose video from your disk</label>
                        <input type="file" class="form-control-file" name="advert">
                      </div>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </form>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            </div>
      </div>
    </div>
</div>

@endsection