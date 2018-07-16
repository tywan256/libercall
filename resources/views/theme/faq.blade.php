<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Liber Call</title>
    <!--link rel="shortcut icon" href="img/favicon1.ico"-->

    <!-- Global Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link href="{!! asset('theme/css/bootstrap/bootstrap.min.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('theme/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/css/animate/animate.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/css/owl-carousel/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/css/owl-carousel/owl.theme.default.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/css/faq.css') !!}">
  </head>

  <body id="page-top">

<!--====================================================
                         HEADER
======================================================--> 

    @include('theme.header')

<!--====================================================
                        CONTENT
======================================================-->      
    @yield('content')


<!--====================================================
                      FOOTER
======================================================--> 
    @include('theme.footer')

    <!--Global JavaScript -->
    <script src="{!! asset('theme/js/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('theme/js/popper/popper.min.js') !!}"></script>
    <script src="{!! asset('theme/js/bootstrap/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('theme/js/wow/wow.min.js') !!}"></script>
    <script src="{!! asset('theme/js/owl-carousel/owl.carousel.min.js') !!}"></script>
    <script>
        if( jQuery(".toggle .toggle-title").hasClass('active') ){
                jQuery(".toggle .toggle-title.active").closest('.toggle').find('.toggle-inner').show();
            }
            jQuery(".toggle .toggle-title").click(function(){
                if( jQuery(this).hasClass('active') ){
                    jQuery(this).removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
                }
                else{   jQuery(this).addClass("active").closest('.toggle').find('.toggle-inner').slideDown(200);
                }
            });
    </script> 

    <!-- Plugin JavaScript -->
    <script src="{!! asset('theme/js/jquery-easing/jquery.easing.min.js') !!}"></script><script src="{!! asset('theme/js/main.js') !!}"></script>
    <script src="{!! asset('theme/js/custom.js') !!}"></script>  
  </body>

</html>