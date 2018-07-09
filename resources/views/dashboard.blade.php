@extends('theme.default')

@section('content')
<div class="page-content d-flex align-items-stretch">
    <nav class="side-navbar">
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{ asset('theme/img/avatar-1.jpg')}}" alt="My Photo" class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h4">Steena Ben</h1>
            </div>
        </div>
        <hr>
        <!-- Sidebar Navidation Menus-->
        <ul class="list-unstyled">    
            <li class="active"> <a href="advertiser.html"> <i class="fa fa-bar-chart"></i>Statistics </a></li>
            <li> <a href="upload.html"> <i class="fa fa-upload"></i>Upload video/audio </a></li>
        </ul>
    </nav>

    <div class="content-inner">

        <!--***** REPORT-1 *****-->     
        <div class="row" id="report1">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-block">
                        <div class="text-left report1-cont">
                            <h3 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i> 220 views</h3>
                            <span class="text-muted">Todays Views</span>
                        </div>
                        <span class="text-success">80%</span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p><small>Last month 10% Growth</small></p>
                    </div>
                </div>
            </div> 
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-block">
                        <div class="text-left report1-cont">
                            <h3 class="font-light m-b-0"><i class="ti-arrow-up text-danger"></i> 530 views</h3>
                            <span class="text-muted">This Week</span>
                        </div>
                        <span class="text-danger">43%</span>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 43%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p><small>Last month 10% Growth</small></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-block"> 
                        <div class="text-left report1-cont">
                            <h3 class="font-light m-b-0"><i class="ti-arrow-up text-warning"></i> 620 views</h3>
                            <span class="text-muted">This Month </span>
                        </div>
                        <span class="text-warning">53%</span>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 53%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p><small>Last month 10% Growth</small></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-block"> 
                        <div class="text-left report1-cont">
                            <h3 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i> 8600 views</h3>
                            <span class="text-muted">All Views</span>
                        </div>
                        <span class="text-info">70%</span>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 70%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p><small>Last month 10% Growth</small></p>
                    </div>
                </div>
            </div>                
        </div>

        <!--***** REPORT-2 *****-->     
        <div class="row" id="report2">
            <div class="col-md-4">
                <div class="card card-c1">
                    <div class="card-header card-chart" data-background-color="green">
                        <canvas class="ct-chart" id="myChart1" height="250"></canvas>
                    </div>
                    <div class="card-content">
                        <h4 class="title">Daily Sales</h4>
                        <p class="category">
                            <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> updated 4 minutes ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-c1">
                    <div class="card-header card-chart" data-background-color="orange">
                        <canvas class="ct-chart" id="myChart2" height="250"></canvas>
                    </div>
                    <div class="card-content">
                        <h4 class="title">Email Subscriptions</h4>
                        <p class="category">Last Campaign Performance</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-c1">
                    <div class="card-header card-chart" data-background-color="red">
                        <canvas class="ct-chart" id="myChart3" height="250"></canvas>
                    </div>
                    <div class="card-content">
                        <h4 class="title">Completed Tasks</h4>
                        <p class="category">Last Campaign Performance</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection