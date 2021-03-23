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
    <div id="rq-page-loading" >
      <div class="rq-loading-icon"><i class="ion-load-c"></i></div>

    </div>
    <div id="main-wrapper">
      <header class="header home-header"
        style="background: url('{{ asset('img/real-estate/constructionindustryscheme_57862405_1.jpg')  }}') top center no-repeat; background-size: 100% 100%;">
        <div class="headroom-sticky home-page-menu">
          <div class="rq-header-location">
            <div class="container">
              <p>Your Location: <span>UET Mardan Campus</span> <a href="#">Change location</a> </p>
            </div>
          </div>
          <nav class="navbar navbar-default navbar-home with-location">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{ asset('img/real-estate/logo6.png')}}" alt=""/></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="index.html" >Home</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                      aria-haspopup="true" aria-expanded="false">Contractor <span class="ion-chevron-down"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="listing-plain-heading.html">Construction</a></li>
                      <li><a href="listing-map.html">Plumber</a></li>
                      <li><a href="listing-slider.html">Tile</a></li>
                      <li><a href="listing-banner.html">Electrical</a></li>
                      <li><a href="listing-adsense.html">Furniture</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                      aria-haspopup="true" aria-expanded="false">Labor <span class="ion-chevron-down"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="blog-grid.html">Mison</a></li>
                      <li><a href="blog-list-thumb.html">Electrion</a></li>
                      <li><a href="blog-listing.html">Plumber</a></li>
                      <li><a href="blog-masonary.html">Furniture</a></li>
                      <li><a href="post-image-single.html">Tile</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                      aria-haspopup="true" aria-expanded="false">Shops<span class="ion-chevron-down"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="users.html">Material Shops</a></li>
                      <li><a href="user-profile.html">Furniture Shops</a></li>
                      <li><a href="agencies.html">Plumber Shops</a></li>
                      <li><a href="agency-single.html">Tile Shops</a></li>
                      <li><a href="registration.html">Electrical Shops</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                      aria-haspopup="true" aria-expanded="false">Explore <span class="ion-chevron-down"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="contact-us.html">Blog</a></li>
                      <li><a href="pricing-plan.html">Guide</a></li>
                      <li><a href="coming-soon.html">Discover </a></li>
                      <li><a href="page-404.html">Learn</a></li>
                      <li><a href="media-elements.html">Community</a></li>
                      <li><a href="typography.html">Contact Us</a></li>
                    </ul>
                  </li>
                  <li class="login-register-link"><a href="registration.html">
                      <i class="icon_lock-open_alt"></i>Login or Register</a>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>

        <div class="header-body">
          <div class="container">
            <h1 class="wow fadeInUp">Easy Search For Your Construction<br>Contractor,Labor & Shop Material</h1>
            <div class="rq-search-wrapper">
              <div class="rq-search-toggle">
                <button class=" rq-btn rq-btn-primary rounded"><b class="ion-android-search"></b></button>
              </div>
              <div class="rq-search-container">
                <div class="rq-search-single">
                  <div class="rq-search-content">
                    <span class="rq-search-heading">Location</span>
                    <select name="categories" class="category-option">
                      <option value="0">Pick a location</option>
                      <option value="AL">Lahore</option>
                      <option value="AK">Peshawar</option>
                      <option value="AZ">Islamabad</option>
                      <option value="AR">Karachi</option>
                      <option value="CA">Kashmir</option>
                      <option value="CO">Gilgit</option>
                      <option value="CT">Balochistan</option>
                    </select>
                  </div>
                </div>
                <div class="rq-search-single">
                  <div class="rq-search-content">
                    <span class="rq-search-heading">Category</span>
                    <select name="categories" class="category-option">
                      <option value="0">Select</option>
                      <option value="Co">Contractor</option>
                      <option value="AL">Labour</option>
                      <option value="AK">Shops</option>
                    </select>
                  </div>
                </div>
                <div class="rq-search-single">
                  <div class="rq-search-content last-child">
                    <span class="rq-search-heading">Experiance Level</span>
                    <select name="categories" class="category-option">
                      <option value="0">Select</option>
                      <option value="2">Basic level</option>
                      <option value="1">Standard Level</option>
                      <option value="3">Premium Level</option>
                    </select>
                  </div>
                </div>
                <div class="rq-search-single search-btn">
                  <div class="rq-search-content">
                    <button class="rq-btn rq-btn-primary fluid-btn">Search <i class="arrow_right"></i></button>
                  </div>
                </div>
              </div> <!-- / .search-container -->
            </div>
          </div>
        </div> <!-- /.header-body -->
      </header> <!-- end header -->

      <div class="rq-page-content">
        <div class="rq-content-block gray-bg no-top-padding">
          <div class="container">
            <div class="rq-listing-counter home-counter wow fadeIn" data-wow-delay=".3s"> <!-- listing counter portion -->
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="rq-listing-counter-item">
                    <h3 class="rq-listing-counter-number" data-from="25" data-to="12460" data-speed="5000" data-refresh-interval="50" >12,460</h3>
                    <p class="rq-listing-counter-title">Customers</p>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="rq-listing-counter-item">
                    <h3 class="rq-listing-counter-number" data-from="25" data-to="10750" data-speed="5000" data-refresh-interval="50" >10, 750</h3>
                    <p class="rq-listing-counter-title">Contractors</p>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="rq-listing-counter-item">
                    <h3 class="rq-listing-counter-number" data-from="25" data-to="8670" data-speed="5000" data-refresh-interval="50" >8670</h3>
                    <p class="rq-listing-counter-title">Labors</p>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="rq-listing-counter-item no-border">
                    <h3 class="rq-listing-counter-number" data-from="25" data-to="12630" data-speed="5000" data-refresh-interval="50" >12,630</h3>
                    <p class="rq-listing-counter-title">Shops</p>
                  </div>
                </div>
              </div>
            </div> <!-- listing counter portion end -->
            <div class="rq-title-container text-center">
              <p class="rq-subtitle">this is how it works</p>
              <h2 class="rq-title">Search for Need, Make a Call, Negoatiate &amp; buy</h2>
            </div>
            <div class="rq-icon-box-wrapper">
              <div class="row">
                <div class="col-md-3 col-sm-3">
                  <div class="rq-icon-box-single">
                    <div class="rq-icon-home">
                      <i class="ion-ios-search-strong"></i>
                    </div>
                    <h5>Search</h5>
                    <p>Over 30,000 Community</p>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3">
                  <div class="rq-icon-box-single">
                    <div class="rq-icon-home">
                      <i class="ion-person"></i>
                    </div>
                    <h5>View Work Profile</h5>
                    <p>Contractor,Labor &amp; Shops</p>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3">
                  <div class="rq-icon-box-single">
                    <div class="rq-icon-home">
                      <i class="ion-ios-cart-outline"></i>
                    </div>
                    <h5>Hire OR Buy</h5>
                    <p>Make a good price</p>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3">
                  <div class="rq-icon-box-single">
                    <div class="rq-icon-home">
                      <i class="ion-ios-heart-outline"></i>
                    </div>
                    <h5>you are done</h5>
                    <p>Cheers!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- end rq-content-block -->
        <div class="rq-content-block no-padding">
          <div class="rq-real-estae-property-tab">
            <div class="rq-real-estate-tab-section">
              <div class="rq-title-container">
                <p class="rq-subtitle">Smart Builder Top Contractors</p>
                <h2 class="rq-title">Top Experience Contractor you will like!</h2>
              </div>

              <div class="related-car-faq">
                <div class="rq-category-result-items">
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                      <a href="#property-1"  role="tab" data-toggle="tab">
                        <div class="rq-category-result-single">
                          <div class="rq-result-img">
                            <img src="{{ asset('img/real-estate/listing-category/Contractor_1.jpg')}}" alt=""/>
                          </div>
                          <div class="rq-result-text">
                            <h4>Contractor Name</h4>
                            <p class="rq-listing-item-address">Location</p>
                            <h3><span class="new-price">View Details</span></h3>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#property-2"  role="tab" data-toggle="tab">
                        <div class="rq-category-result-single">
                          <div class="rq-result-img">
                            <img src="{{ asset('img/real-estate/listing-category/Contractor_2.jpg')}}" alt=""/>
                          </div>
                          <div class="rq-result-text">
                            <h4>Contractor Name</h4>
                            <p class="rq-listing-item-address">Location</p>
                            <h3><span class="new-price">View Details</span></h3>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#property-3"  role="tab" data-toggle="tab">
                        <div class="rq-category-result-single">
                          <div class="rq-result-img">
                            <img src="{{ asset('img/real-estate/listing-category/Contractor_3.jpg')}}" alt=""/>
                          </div>
                          <div class="rq-result-text">
                            <h4>Contractor Name</h4>
                            <p class="rq-listing-item-address">Location</p>
                            <h3><span class="new-price">View Details</span></h3>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#property-4"  role="tab" data-toggle="tab">
                        <div class="rq-category-result-single">
                          <div class="rq-result-img">
                            <img src="{{ asset('img/real-estate/listing-category/Contractor_4.jpg')}}" alt=""/>
                          </div>
                          <div class="rq-result-text">
                            <h4>Contractor Name</h4>
                            <p class="rq-listing-item-address">Location</p>
                            <h3><span class="new-price">View Details</span></h3>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
              <div class="rq-property-tab-content">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="property-1">
                  <div class="rq-real-estate-tab-content">
                    <div class="rq-tab-img" style="background:url('{{ asset('img/real-estate/Contractor_1.jpg')}} ') top center no-repeat; background-size:cover;">
                    </div>
                    <div class="rq-property-details">
                      <div class="property-title">
                        <h3><a href="#">Contractor_1</a></h3>
                        <p class="address">Location</p>
                        <h2>$Price</h2>
                      </div>
                      <div class="property-info">
                        <ul class="rq-property-list">
                          <li><i class="ion-arrow-expand"></i>Contractor type: </li>
                          <li><div class="rq-bath-icon"></div>Level: </li>
                          <li><div class="rq-bed-icon"></div>Review:</li>
                          <li><i class="fa fa-building-o"></i>Rating:</li>
                          <li><i class="ion-ios-home-outline"></i>Work Profile:</li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div> <!-- end tab-pange -->
                <div role="tabpanel" class="tab-pane fade in" id="property-2">
                  <div class="rq-real-estate-tab-content">
                    <div class="rq-tab-img" style="background:url('{{ asset('img/real-estate/Contractor_2.jpg')}}') top center no-repeat; background-size:cover;">
                    </div>
                    <div class="rq-property-details">
                      <div class="property-title">
                        <h3><a href="#">Contractor_2</a></h3>
                        <p class="address">Location</p>
                        <h2>$Price</h2>
                      </div>
                      <div class="property-info">
                        <ul class="rq-property-list">
                          <li><i class="ion-arrow-expand"></i>Contractor type: </li>
                          <li><div class="rq-bath-icon"></div>Level: </li>
                          <li><div class="rq-bed-icon"></div>Review:</li>
                          <li><i class="fa fa-building-o"></i>Rating:</li>
                          <li><i class="ion-ios-home-outline"></i>Work Profile:</li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div> <!-- end tab-pange -->
                <div role="tabpanel" class="tab-pane fade in" id="property-3">
                  <div class="rq-real-estate-tab-content">
                    <div class="rq-tab-img" style="background:url('{{ asset('img/real-estate/Contractor_3.jpg')}}') top center no-repeat; background-size:cover;">
                    </div>
                    <div class="rq-property-details">
                      <div class="property-title">
                        <h3><a href="#">Contractor_3</a></h3>
                        <p class="address">Location</p>
                        <h2>$Price</h2>
                      </div>
                      <div class="property-info">
                        <ul class="rq-property-list">
                          <li><i class="ion-arrow-expand"></i>Contractor type: </li>
                          <li><div class="rq-bath-icon"></div>Level: </li>
                          <li><div class="rq-bed-icon"></div>Review:</li>
                          <li><i class="fa fa-building-o"></i>Rating:</li>
                          <li><i class="ion-ios-home-outline"></i>Work Profile:</li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div> <!-- end tab-pange -->
                <div role="tabpanel" class="tab-pane fade in" id="property-4">
                  <div class="rq-real-estate-tab-content">
                    <div class="rq-tab-img" style="background:url('{{ asset('img/real-estate/Contractor_4.jpg')}}') top center no-repeat; background-size:cover;">
                    </div>
                    <div class="rq-property-details">
                      <div class="property-title">
                        <h3><a href="#">Contractor_4</a></h3>
                        <p class="address">Location</p>
                        <h2>$Price</h2>
                      </div>
                      <div class="property-info">
                        <ul class="rq-property-list">
                          <li><i class="ion-arrow-expand"></i>Contractor type: </li>
                          <li><div class="rq-bath-icon"></div>Level: </li>
                          <li><div class="rq-bed-icon"></div>Review:</li>
                          <li><i class="fa fa-building-o"></i>Rating:</li>
                          <li><i class="ion-ios-home-outline"></i>Work Profile:</li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div> <!-- end rq-content-block -->
<hr class="break_line">
        <!--Labor field -->

        <div class="rq-content-block no-padding">
          <div class="rq-real-estae-property-tab">
            <div class="rq-real-estate-tab-section">
              <div class="rq-title-container">
                <p class="rq-subtitle">Smart Builder Top Labors</p>
                <h2 class="rq-title">Top Experience Contractor you will like!</h2>
              </div>

              <div class="related-car-faq">
                <div class="rq-category-result-items">
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                      <a href="#Labor_1"  role="tab" data-toggle="tab">
                        <div class="rq-category-result-single">
                          <div class="rq-result-img">
                            <img src="{{ asset('img/real-estate/listing-category/Labor_1.jpg')}}" alt=""/>
                          </div>
                          <div class="rq-result-text">
                            <h4>Labor Name</h4>
                            <p class="rq-listing-item-address">Location</p>
                            <h3><span class="new-price">View Details</span></h3>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#Labor_2"  role="tab" data-toggle="tab">
                        <div class="rq-category-result-single">
                          <div class="rq-result-img">
                            <img src="{{ asset('img/real-estate/listing-category/Labor_2.jpg')}}" alt=""/>
                          </div>
                          <div class="rq-result-text">
                            <h4>Labor Name</h4>
                            <p class="rq-listing-item-address">Location</p>
                            <h3><span class="new-price">View Details</span></h3>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#Labor_3"  role="tab" data-toggle="tab">
                        <div class="rq-category-result-single">
                          <div class="rq-result-img">
                            <img src="{{ asset('img/real-estate/listing-category/Labor_3.jpg')}}" alt=""/>
                          </div>
                          <div class="rq-result-text">
                            <h4>Labor Name</h4>
                            <p class="rq-listing-item-address">Location</p>
                            <h3><span class="new-price">View Details</span></h3>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#Labor_4"  role="tab" data-toggle="tab">
                        <div class="rq-category-result-single">
                          <div class="rq-result-img">
                            <img src="{{ asset('img/real-estate/listing-category/Labor_4.jpg')}}" alt=""/>
                          </div>
                          <div class="rq-result-text">
                            <h4>Labor Name</h4>
                            <p class="rq-listing-item-address">Location</p>
                            <h3><span class="new-price">View Details</span></h3>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
              <div class="rq-property-tab-content">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="Labor_1">
                  <div class="rq-real-estate-tab-content">
                    <div class="rq-tab-img" style="background:url('{{ asset('img/real-estate/Labor_1.jpg')}}') top center no-repeat; background-size:cover;">
                    </div>
                    <div class="rq-property-details">
                      <div class="property-title">
                        <h3><a href="#">Labor_1</a></h3>
                        <p class="address">Location</p>
                        <h2>$Price</h2>
                      </div>
                      <div class="property-info">
                        <ul class="rq-property-list">
                         <li><i class="ion-arrow-expand"></i>Labor type: </li>
                          <li><i class="fa fa-building-o"></i>Rating:</li>
                          <li><i class="ion-ios-home-outline"></i>Work Profile:</li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div> <!-- end tab-pange -->
                <div role="tabpanel" class="tab-pane fade in" id="Labor_2">
                  <div class="rq-real-estate-tab-content">
                    <div class="rq-tab-img" style="background:url('{{ asset('img/real-estate/Labor_2.jpg')}}') top center no-repeat; background-size:cover;">
                    </div>
                    <div class="rq-property-details">
                      <div class="property-title">
                        <h3><a href="#">Labor_2</a></h3>
                        <p class="address">Location</p>
                        <h2>$Price</h2>
                      </div>
                      <div class="property-info">
                        <ul class="rq-property-list">
                          <li><i class="ion-arrow-expand"></i>Labor type: </li>
                          <li><i class="fa fa-building-o"></i>Rating:</li>
                          <li><i class="ion-ios-home-outline"></i>Work Profile:</li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div> <!-- end tab-pange -->
                <div role="tabpanel" class="tab-pane fade in" id="Labor_3">
                  <div class="rq-real-estate-tab-content">
                    <div class="rq-tab-img" style="background:url('{{ asset('img/real-estate/Labor_3.jpg')}}') top center no-repeat; background-size:cover;">
                    </div>
                    <div class="rq-property-details">
                      <div class="property-title">
                        <h3><a href="#">Labor_3</a></h3>
                        <p class="address">Location</p>
                        <h2>$Price</h2>
                      </div>
                      <div class="property-info">
                        <ul class="rq-property-list">
                          <li><i class="ion-arrow-expand"></i>Labor type: </li>
                          <li><i class="fa fa-building-o"></i>Rating:</li>
                          <li><i class="ion-ios-home-outline"></i>Work Profile:</li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div> <!-- end tab-pange -->
                <div role="tabpanel" class="tab-pane fade in" id="Labor_4">
                  <div class="rq-real-estate-tab-content">
                    <div class="rq-tab-img" style="background:url('{{ asset('img/real-estate/Labor_4.jpg')}}') top center no-repeat; background-size:cover;">
                    </div>
                    <div class="rq-property-details">
                      <div class="property-title">
                        <h3><a href="#">Labor_4</a></h3>
                        <p class="address">Location</p>
                        <h2>$Price</h2>
                      </div>
                      <div class="property-info">
                        <ul class="rq-property-list">
                          <li><i class="ion-arrow-expand"></i>Labor type: </li>
                          <li><i class="fa fa-building-o"></i>Rating:</li>
                          <li><i class="ion-ios-home-outline"></i>Work Profile:</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
     <!-- /.rq-content-block -->
<hr class="break_line">
<!--Shop field-->
          
          <div class="rq-content-block no-padding">
          <div class="rq-real-estae-property-tab">
            <div class="rq-real-estate-tab-section">
              <div class="rq-title-container">
                <p class="rq-subtitle">Smart Builder Top Shops</p>
                <h2 class="rq-title">Every Construction Materils you will Look for!</h2>
              </div>

              <div class="related-car-faq">
                <div class="rq-category-result-items">
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                      <a href="#Shop_1"  role="tab" data-toggle="tab">
                        <div class="rq-category-result-single">
                          <div class="rq-result-img">
                            <img src="{{ asset('img/real-estate/listing-category/Shop_1.jpg')}}" alt=""/>
                          </div>
                          <div class="rq-result-text">
                            <h4>Shop Name</h4>
                            <p class="rq-listing-item-address">Location</p>
                            <h3><span class="new-price">View Details</span></h3>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#Shop_2"  role="tab" data-toggle="tab">
                        <div class="rq-category-result-single">
                          <div class="rq-result-img">
                            <img src="{{ asset('img/real-estate/listing-category/Shop_2.jpg')}}" alt=""/>
                          </div>
                          <div class="rq-result-text">
                            <h4>Shop Name</h4>
                            <p class="rq-listing-item-address">Location</p>
                            <h3><span class="new-price">View Details</span></h3>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#Shop_3"  role="tab" data-toggle="tab">
                        <div class="rq-category-result-single">
                          <div class="rq-result-img">
                            <img src="{{ asset('img/real-estate/listing-category/Shop_3.jpg')}}" alt=""/>
                          </div>
                          <div class="rq-result-text">
                            <h4>Shop Name</h4>
                            <p class="rq-listing-item-address">Location</p>
                            <h3><span class="new-price">View Details</span></h3>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li role="presentation">
                      <a href="#Shop_4"  role="tab" data-toggle="tab">
                        <div class="rq-category-result-single">
                          <div class="rq-result-img">
                            <img src="{{ asset('img/real-estate/listing-category/Shop_4.jpg')}}" alt=""/>
                          </div>
                          <div class="rq-result-text">
                            <h4>Shop Name 1</h4>
                            <p class="rq-listing-item-address">Location</p>
                            <h3><span class="new-price">View Details</span></h3>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
              <div class="rq-property-tab-content">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="Shop_1">
                  <div class="rq-real-estate-tab-content">
                    <div class="rq-tab-img" style="background:url('{{ asset('img/real-estate/Shop_1.jpg')}}') top center no-repeat; background-size:cover;">
                    </div>
                    <div class="rq-property-details">
                      <div class="property-title">
                        <h3><a href="#">Shop Name 2</a></h3>
                        <p class="address">Location</p>
                        <h2>View Shop Items</h2>
                      </div>
                      <div class="property-info">
                        <ul class="rq-property-list">
                          <li><i class="ion-arrow-expand"></i>Shop Type: </li>
                          <li><div class="rq-bath-icon"></div>Items Available  </li>
                          <li><div class="rq-bed-icon"></div>Ratings</li>
                          
                        </ul>
                      </div>

                    </div>
                  </div>
                </div> <!-- end tab-pange -->
                <div role="tabpanel" class="tab-pane fade in" id="Shop_2">
                  <div class="rq-real-estate-tab-content">
                    <div class="rq-tab-img" style="background:url('{{ asset('img/real-estate/Shop_2.jpg')}}') top center no-repeat; background-size:cover;">
                    </div>
                    <div class="rq-property-details">
                      <div class="property-title">
                        <h3><a href="#">Shop Name 3</a></h3>
                        <p class="address">Location</p>
                        <h2>View Shop Items</h2>
                      </div>
                      <div class="property-info">
                        <ul class="rq-property-list">
                          <li><i class="ion-arrow-expand"></i>Shop Type: </li>
                          <li><div class="rq-bath-icon"></div>Items Available  </li>
                          <li><div class="rq-bed-icon"></div>Ratings</li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div> <!-- end tab-pange -->
                <div role="tabpanel" class="tab-pane fade in" id="Shop_3">
                  <div class="rq-real-estate-tab-content">
                    <div class="rq-tab-img" style="background:url('{{ asset('img/real-estate/Shop_3.jpg')}}') top center no-repeat; background-size:cover;">
                    </div>
                    <div class="rq-property-details">
                      <div class="property-title">
                        <h3><a href="#">Shop Name 4</a></h3>
                        <p class="address">Location</p>
                        <h2>View Shop Items</h2>
                      </div>
                      <div class="property-info">
                        <ul class="rq-property-list">
                          <li><i class="ion-arrow-expand"></i>Shop Type: </li>
                          <li><div class="rq-bath-icon"></div>Items Available  </li>
                          <li><div class="rq-bed-icon"></div>Ratings</li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div> <!-- end tab-pange -->
                <div role="tabpanel" class="tab-pane fade in" id="Shop_4">
                  <div class="rq-real-estate-tab-content">
                    <div class="rq-tab-img" style="background:url('{{ asset('img/real-estate/Shop_4.jpg')}}') top center no-repeat; background-size:cover;">
                    </div>
                    <div class="rq-property-details">
                      <div class="property-title">
                        <h3><a href="#">dectachted house to rent</a></h3>
                        <p class="address">2495 Tident St, NY</p>
                        <h2>$850,00</h2>
                      </div>
                      <div class="property-info">
                        <ul class="rq-property-list">
                          <li><i class="ion-arrow-expand"></i>Shop Type: </li>
                          <li><div class="rq-bath-icon"></div>Items Available  </li>
                          <li><div class="rq-bed-icon"></div>Ratings</li>
                        </ul>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

         <!-- end #main-wrapper -->

    <footer class="rq-footer">
      <div class="rq-main-footer">
        <div class="container">
          <button class="toggle-widget">Footer widget</button>
          <div class="footer-widget">
            <div class="row">
              <div class="col-md-3 col-sm-3">
                <div class="widget-address">
                  <a href="#">
                    <img src="{{ asset('img/real-estate/logo6.png')}}" alt="">
                  </a>
                  <p class="description">Smartbuilder.pk is smart and easy choice to make an efficent Construction.It can provide you all neccessory troops at home</p>
                  <span class="address"><i class="icon_pin"></i>University of Engineering and technology Peshawar Mardan campus</span>
                  <span class="address"><i class="icon_mail_alt"></i>smartbuilder.pk@gmail.com</span>
                  <span class="address"><i class="icon_phone"></i>(0091) 8547 632521</span>

                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="widget-tags">
                  <h4 class="widget-title">popular tags</h4>
                  <div class="tagcloud">
                    <a href="#" class="rq-tag">Contractors</a>
                    <a href="#" class="rq-tag">Labors</a>
                    <a href="#" class="rq-tag">Shops</a>
                    <a href="#" class="rq-tag">Eelectrion</a>
                    <a href="#" class="rq-tag">Plumber</a>
                    <a href="#" class="rq-tag">Mison</a>
                    <a href="#" class="rq-tag">Furniture</a>
                  </div>

                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="widget-list">
                  <h4 class="widget-title">recent post</h4>
                  <ul class="address">
                    <li><a href="#"><i class="arrow_carrot-2right"></i>How you can impact your customers.</a></li>
                    <li><a href="#"><i class="arrow_carrot-2right"></i>Scholar is all about quality.</a></li>
                    <li><a href="#"><i class="arrow_carrot-2right"></i>Is your website user friendly ?</a></li>
                    <li><a href="#"><i class="arrow_carrot-2right"></i>Scholar offer weekly updates &amp; more</a></li>
                    <li><a href="#"><i class="arrow_carrot-2right"></i>Your customer should love your web.</a></li>
                    <li><a href="#"><i class="arrow_carrot-2right"></i>Make your site smooth and stunning.</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3">
                <div class="widget-list">
                  <h4 class="widget-title">Mailing list</h4>
                  <p class="description">Sign up for our mailing list to get latest updates and offers.</p>
                  <div class="rq-newsletter">
                    <form action="#">
                      <input class="fq-newsletter-form" type="text" placeholder="Enter your email">
                      <button class="rq-btn" type="submit"><i class="arrow_right"></i></button>
                    </form>
                  </div>
                  <ul class="list-unstyled social-list">
                    <li><a href="#"><i class="social_twitter"></i></a></li>
                    <li><a href="#"><i class="social_googleplus"></i></a></li>
                    <li><a href="#"><i class="social_pinterest"></i></a></li>
                    <li><a href="#"><i class="social_rss"></i></a></li>
                    <li><a href="#"><i class="social_facebook"></i></a></li>
                    <li><a href="#"><i class="social_dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /.rq-main-footer -->

      <div class="rq-copyright-section">
        <div class="container">
          <div class="copyright-content">
            <p>Copyrights © 2021 by <a href="#">Smartbuilder.pk.</a> All Rights Reserved.</p>
            <ul class="list-unstyled social-list">
              <li><a href="#">Home</a></li>
              <li><a href="#">Properties</a></li>
              <li><a href="#">Agents</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
      </div> <!-- /.rq-copyright-section -->
    </footer>
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
