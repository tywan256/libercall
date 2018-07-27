@extends('theme.default')

@section('content')

<!--====================================================
                       HOME-P
======================================================-->
<div id="home-p" class="home-p pages-head4 text-center">
      <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">Contact Us</h1>
      </div><!--/end container-->
    </div> 

<!--====================================================
                        CONTACT-P1  
======================================================--> 
<div class="container">
    <section id="contact-p1" class="contact-p1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-p1-cont">
              <h3>Contact our experienced team</h3>
              <div class="heading-border-light"></div> 
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model texty.</p>
            </div>
          </div>
          <!-- <div class="col-md-4"> 
            <div class="contact-p1-cont2"> 
              <address class="address-details-f">
                Plot 7, Binayomba road, Bugolobi <br>
                Kampala, Uganda <br>
                Phone: (+256) 780 62 3565 <br>
                Fax: 780 62 3565 <br>
                Email: <a href="mailto:support@intervas.com" class="">support@intervas.com</a>
              </address>
              <ul class="list-inline social-icon-f top-data">
                <li><a href="#" target="_empty"><i class="fa top-social fa-facebook" style="height: 35px; width:35px; line-height: 35px;"></i></a></li>
                <li><a href="#" target="_empty"><i class="fa top-social fa-twitter" style="height: 35px; width:35px; line-height: 35px;"></i></a></li>
                <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus" style="height: 35px; width:35px; line-height: 35px;"></i></a></li> 
              </ul>
            </div>
          </div>   -->
        </div>
      </div>
    </section>

<!--====================================================
                        CONTACT-P2 
======================================================--> 
    <service class="contact-p2" id="contact-p2">
      <div class="container">
          <div class="row con-form">
            <div class="col-md-4">
              <input type="text" name="full-name" placeholder="Full Name" class="form-control">
            </div>
            <div class="col-md-4">
              <input type="text" name="email" placeholder="Email Id" class="form-control">
            </div>
            <div class="col-md-4">
              <input type="text" name="subject" placeholder="Subject" class="form-control">
            </div>
            <div class="col-md-12"><textarea name="" id=""></textarea></div>
            <div class="col-md-4"></div>
            <div class="col-md-4 sub-but"><button class="btn btn-success" role="button">Send</button></div>
            <div class="col-md-4"></div>
          </div>
      </div>
    </service>

<!--====================================================
                       MAP
======================================================--> 
    <!-- <section id="contact-add">
      <div id="map">
        <div class="map-responsive">
           <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=VentureLabs%20East%20Africa%2C%20Binayomba%20Road%2C%20Kampala%2C%20Uganda+(InterVAS%20Uganda%20Limited)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div> 
    </section> -->
    </div>
    @endsection