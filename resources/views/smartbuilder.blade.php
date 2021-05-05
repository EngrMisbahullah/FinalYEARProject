<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SmartBuilder</title>
  <!-- Main style -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div id="rq-page-loading">
    <div class="rq-loading-icon"><i class="ion-load-c"></i></div>

  </div>
  <div id="main-wrapper">
    <header class=" header home-header" style="background: url('{{ asset('img/real-estate/constructionindustryscheme_57862405_1.jpg')  }}') top center no-repeat; background-size: 100% 100%;">
      <script src="{{ asset('js/wow.min.js')}}"></script>
      <div class="headroom-sticky home-page-menu">
        <div class="rq-header-location">
          <div class="container">
            <p>Your Location: <span>UET Mardan Campus
                <?php

                $geoinfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);

                ?><span><?php echo $geoinfo->city; ?></span>
              </span> <a href="#">Change location</a> </p>
          </div>
        </div>
        @include('header');

        <div class="header-body">
          @include('easysearch');
        </div> <!-- /.header-body -->
    </header> <!-- end header -->

    <div class="rq-page-content">
      <div class="rq-content-block gray-bg no-top-padding">
        <div class="container">
          <div class="rq-listing-counter home-counter wow fadeIn" data-wow-delay=".3s">
            <!-- listing counter portion -->
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="rq-listing-counter-item">
                  <h3 class="rq-listing-counter-number" data-from="25" data-to="12460" data-speed="5000" data-refresh-interval="50">12,460</h3>
                  <p class="rq-listing-counter-title">Customers</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="rq-listing-counter-item">
                  <h3 class="rq-listing-counter-number" data-from="25" data-to="10750" data-speed="5000" data-refresh-interval="50">10, 750</h3>
                  <p class="rq-listing-counter-title">Contractors</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="rq-listing-counter-item">
                  <h3 class="rq-listing-counter-number" data-from="25" data-to="8670" data-speed="5000" data-refresh-interval="50">8670</h3>
                  <p class="rq-listing-counter-title">Labors</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="rq-listing-counter-item no-border">
                  <h3 class="rq-listing-counter-number" data-from="25" data-to="12630" data-speed="5000" data-refresh-interval="50">12,630</h3>
                  <p class="rq-listing-counter-title">Shops</p>
                </div>
              </div>
            </div>
          </div> <!-- listing counter portion end -->
          @include('howitworks');
        </div>
        @include('Topcontractors');
        <hr class="break_line">
        <!--Labor field -->
        @include('Toplabor');

        <!-- /.rq-content-block -->
        <hr class="break_line">
        <!--Shop field-->
        @include('Topshops');


      </div>
      @include('Footer');
      <!-- end #main-wrapper -->

      <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('js/jquery.mousewheel.js')}}" type="text/javascript"></script>
      <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
      <script src="{{ asset('js/masonry.pkgd.min.js')}}" type="text/javascript"></script>
      <script src="{{ asset('js/selectize.min.js')}}"></script>
      <script src="{{ asset('js/jquery.sticky.js')}}" type="text/javascript"></script>
      <script src="{{ asset('js/jquery.counterup.js')}}" type="text/javascript"></script>
      <script src="{{ asset('js/wow.min.js')}}"></script>
      <script src="{{ asset('js/owl-carousel.js')}}"></script>
      <script src="{{ asset('js/jquery.nicescroll.js')}}"></script>
      <script src="{{ asset('js/jquery.nicescroll.js')}}"></script>
      <script src="{{ asset('js/scripts.js')}}" type="text/javascript"></script>
</body>

</html>