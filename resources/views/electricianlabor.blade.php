<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>materialshop</title>
    <!-- Main style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

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
        <header class="header">
            @include('header1');
        </header> <!-- end header -->

        <div class="rq-page-content">
            <!-- start page content -->
            <div class="rq-content-block rq-sidebar-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-8 col-md-push-3">


                            <h3 class="rq-title-secondary no-extra-style">Material Shops</h3>
                            <div class="rq-listing-plain-heading-toolbar">
                                <!-- start toolbar -->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="rq-listing-search-results">
                                            <p>13 Result Listing</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="rq-listing-plain-heading-tools">
                                            <div class="rq-search-single no-padding">
                                                <div class="rq-search-content last-child">
                                                    <span class="rq-search-heading">Sort By:</span>
                                                    <select name="categories" class="category-option">
                                                        <option value="0">Most Reviewd</option>
                                                        <option value="2">Category two</option>
                                                        <option value="3">Category three</option>
                                                        <option value="4">Category four</option>
                                                        <option value="5">Category five</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="rq-listing-plaing-view-switcher pull-right">
                                            <div class="view-switcher-item rq-listing-list-view"><a href="listing-plain-heading.html"><i class="icon_ul"></i></a></div>
                                            <div class="view-switcher-item rq-listing-map-view"><a href="listing-map.html"><i class="ion-map"></i></a></div>
                                        </div>
                                    </div>
                                </div> <!-- end /.row -->
                            </div> <!-- end toolbar -->

                            <div class="rq-listing-items">
                                <!-- start listing portion -->
                                <div class="rq-listing-item wow fadeIn">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img src="{{ asset('img/company/listing-plain-heading/real-estate/listing1.jpg')}}" alt="">
                                        </div>
                                        <div class="col-sm-7">
                                            <h4 class="rq-listing-item-title"><a href="#">Name of Contractor</a></h4>
                                            <div class="rq-lisitng-item-sub-meta">Work Status</div>
                                            <h4 class="rq-listing-price-amount">$850,00</h4>
                                            <div class="rq-lisitng-item-col real-estate clearfix">
                                                <ul class="rq-property-list">
                                                    <li><i class="ion-arrow-expand"></i>Level</li>
                                                    <li>
                                                        <div class="rq-bath-icon"></div>Rating
                                                    </li>
                                                    <li>
                                                        <div class="rq-bed-icon"></div>Reviews
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="rq-listing-item-sub-extra">
                                                <div class="rq-lisitng-item-col real-estate"><button>Work Profile</button></i></div>
                                                <div class="rq-lisitng-item-col real-estate"><button>Hire Me</button></i></div>
                                            </div>
                                            <div class="rq-lisitng-item-col-loc"><i class="ion-android-pin"></i>Mardan Charsada Chwak</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rq-listing-item wow fadeIn">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img src="{{ asset('img/company/listing-plain-heading/real-estate/listing2.jp')}}'" alt="">
                                        </div>
                                        <div class="col-sm-7">
                                            <h4 class="rq-listing-item-title"><a href="#">Name of Contractor</a></h4>
                                            <div class="rq-lisitng-item-sub-meta">Work Status</div>
                                            <h4 class="rq-listing-price-amount">$850,00</h4>
                                            <div class="rq-lisitng-item-col real-estate clearfix">
                                                <ul class="rq-property-list">
                                                    <li><i class="ion-arrow-expand"></i>Level</li>
                                                    <li>
                                                        <div class="rq-bath-icon"></div>Rating
                                                    </li>
                                                    <li>
                                                        <div class="rq-bed-icon"></div>Reviews
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="rq-listing-item-sub-extra">
                                                <div class="rq-lisitng-item-col real-estate"><button>Work Profile</button></i></div>
                                                <div class="rq-lisitng-item-col real-estate"><button>Hire Me</button></i></div>
                                            </div>
                                            <div class="rq-lisitng-item-col-loc"><i class="ion-android-pin"></i>Mardan Charsada Chwak</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rq-listing-item wow fadeIn">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img src="{{ asset('img/company/listing-plain-heading/real-estate/listing3.jpg')}}" alt="">
                                        </div>
                                        <div class="col-sm-7">
                                            <h4 class="rq-listing-item-title"><a href="#">Name of Contractor</a></h4>
                                            <div class="rq-lisitng-item-sub-meta">Work Status</div>
                                            <h4 class="rq-listing-price-amount">$850,00</h4>
                                            <div class="rq-lisitng-item-col real-estate clearfix">
                                                <ul class="rq-property-list">
                                                    <li><i class="ion-arrow-expand"></i>Level</li>
                                                    <li>
                                                        <div class="rq-bath-icon"></div>Rating
                                                    </li>
                                                    <li>
                                                        <div class="rq-bed-icon"></div>Reviews
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="rq-listing-item-sub-extra">
                                                <div class="rq-lisitng-item-col real-estate"><button>Work Profile</button></i></div>
                                                <div class="rq-lisitng-item-col real-estate"><button>Hire Me</button></i></div>
                                            </div>
                                            <div class="rq-lisitng-item-col-loc"><i class="ion-android-pin"></i>Mardan Charsada Chwak</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rq-listing-item wow fadeIn">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img src="{{ asset('img/company/listing-plain-heading/real-estate/listing4.jpg')}}" alt="">
                                        </div>
                                        <div class="col-sm-7">
                                            <h4 class="rq-listing-item-title"><a href="#">Name of Contractor</a></h4>
                                            <div class="rq-lisitng-item-sub-meta">Work Status</div>
                                            <h4 class="rq-listing-price-amount">$850,00</h4>
                                            <div class="rq-lisitng-item-col real-estate clearfix">
                                                <ul class="rq-property-list">
                                                    <li><i class="ion-arrow-expand"></i>Level</li>
                                                    <li>
                                                        <div class="rq-bath-icon"></div>Rating
                                                    </li>
                                                    <li>
                                                        <div class="rq-bed-icon"></div>Reviews
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="rq-listing-item-sub-extra">
                                                <div class="rq-lisitng-item-col real-estate"><button>Work Profile</button></i></div>
                                                <div class="rq-lisitng-item-col real-estate"><button>Hire Me</button></i></div>
                                            </div>
                                            <div class="rq-lisitng-item-col-loc"><i class="ion-android-pin"></i>Mardan Charsada Chwak</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rq-listing-item wow fadeIn">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img src="{{ asset('img/company/listing-plain-heading/real-estate/listing5.jpg')}}" alt="">
                                        </div>
                                        <div class="col-sm-7">
                                            <h4 class="rq-listing-item-title"><a href="#">Name of Contractor</a></h4>
                                            <div class="rq-lisitng-item-sub-meta">Work Status</div>
                                            <h4 class="rq-listing-price-amount">$850,00</h4>
                                            <div class="rq-lisitng-item-col real-estate clearfix">
                                                <ul class="rq-property-list">
                                                    <li><i class="ion-arrow-expand"></i>Level</li>
                                                    <li>
                                                        <div class="rq-bath-icon"></div>Rating
                                                    </li>
                                                    <li>
                                                        <div class="rq-bed-icon"></div>Reviews
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="rq-listing-item-sub-extra">
                                                <div class="rq-lisitng-item-col real-estate"><button>Work Profile</button></i></div>
                                                <div class="rq-lisitng-item-col real-estate"><button>Hire Me</button></i></div>
                                            </div>
                                            <div class="rq-lisitng-item-col-loc"><i class="ion-android-pin"></i>Mardan Charsada Chwak</div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end listing portion -->

                            <div class="rq-pagination left-pagi">
                                <!-- start pagination -->
                                <ul class="rq-pagination-list">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class=" arrow_carrot-2right"></i></a></li>
                                </ul>
                            </div> <!-- end pagination -->
                        </div>
                        <div class="col-md-3 rq-search-sidebar  with-breadecrumb col-md-pull-9">
                            <div class="rq-listing-sidebar">
                                <div class="rq-listing-search">
                                    <h3 class="rq-title-secondary no-extra-style">Search</h3>
                                    <div class="rq-newsletter">
                                        <form class="hamd" action="">
                                            <input type="text" placeholder="Search By name" name="search">
                                            <button type="submit"><i class="fa fa-search"></i></button>

                                        </form>
                                    </div>
                                    <div class="rq-search-content">

                                        <!-- <select name="categories" class="category-option">
                        <option value="0">Heating,Air Conditioning</option>
                        <option value="1">Paper Hanging</option>
                        <option value="2">Stonework</option>
                        <option value="3">Tile-Setting</option>
                        <option value="4">Roofing</option>
                        <option value="5">Concrete Work</option>
                        <option value="6">Well Drilling</option>
                        <option value="7">Glass and Glazing</option>
                        <option value="8">Excavator</option>
                      </select> -->

                                    </div>
                                    <div class="rq-search-content">
                                        <select name="categories" class="category-option">
                                            <option value="0">Mardan</option>
                                            <option value="AL">Peshawar</option>
                                            <option value="AK">Islamibad</option>
                                            <option value="AZ">Karak</option>
                                            <option value="AR">Timergara</option>
                                            <option value="CA">Dir</option>
                                            <option value="d">Mardan</option>
                                            <option value="AL">Peshawar</option>
                                            <option value="K">Islamibad</option>
                                            <option value="Z">Karak</option>
                                            <option value="R">Timergara</option>
                                            <option value="C">Dir</option>
                                            <option value="p">Mardan</option>
                                            <option value="ALL">Peshawar</option>
                                            <option value="AKK">Islamibad</option>
                                            <option value="AZZ">Karak</option>
                                            <option value="ARR">Timergara</option>
                                            <option value="CAA">Dir</option>

                                        </select>
                                    </div>
                                    <div class="rq-search-content">
                                        <div class="rq-pricing-slider">
                                            <div class="scholar-ui-slider pull-left"></div>
                                            <div class="show-slider-amount pull-left"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rq-listing-sidebar">
                                <h3 class="rq-title-secondary no-extra-style">Categories</h3>
                                <div class="rq-search-content">
                                    <ul class="nav">
                                        <li>
                                            <span class="rq-checkbox">
                                                <input type="checkbox" id="class-a-cat">
                                                <label for="class-a-cat">Heating,Air Conditioning <span class="pull-right">(05)</span></label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rq-checkbox">
                                                <input type="checkbox" id="class-b-cat">
                                                <label for="class-b-cat">Paper Hanging <span class="pull-right">(07)</span></label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rq-checkbox">
                                                <input type="checkbox" id="class-c-cat">
                                                <label for="class-c-cat">Excavator <span class="pull-right">(12)</span></label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rq-checkbox">
                                                <input type="checkbox" id="class-d-cat">
                                                <label for="class-d-cat">Stonework <span class="pull-right">(08)</span></label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rq-checkbox">
                                                <input type="checkbox" id="class-d-cat">
                                                <label for="class-d-cat">Tile-Setting<span class="pull-right">(08)</span></label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rq-checkbox">
                                                <input type="checkbox" id="class-d-cat">
                                                <label for="class-d-cat">Roofing <span class="pull-right">(08)</span></label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rq-checkbox">
                                                <input type="checkbox" id="class-d-cat">
                                                <label for="class-d-cat">Concrete Work <span class="pull-right">(08)</span></label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rq-checkbox">
                                                <input type="checkbox" id="class-d-cat">
                                                <label for="class-d-cat">Well Drilling <span class="pull-right">(08)</span></label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rq-checkbox">
                                                <input type="checkbox" id="class-d-cat">
                                                <label for="class-d-cat">Glass and Glazing <span class="pull-right">(08)</span></label>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rq-listing-sidebar">
                                <h3 class="rq-title-secondary no-extra-style">Saleprice</h3>
                                <div class="rq-listing-search">
                                    <div class="rq-search-content">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="rq-form-element" placeholder="Min Saleprice" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="rq-form-element" placeholder="Max Slaeprice" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="rq-listing-sidebar">
                  <h3 class="rq-title-secondary no-extra-style">Bedroom</h3>
                  <div class="rq-listing-search">
                    <div class="rq-search-content">
                      <div class="row">
                        <div class="col-sm-6">
                          <input type="text" class="rq-form-element" placeholder="Min Bedroom"/>
                        </div>
                        <div class="col-sm-6">
                          <input type="text" class="rq-form-element" placeholder="Max Bedroom"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                            <!-- <div class="rq-listing-sidebar">
                  <h3 class="rq-title-secondary no-extra-style">Bathroom</h3>
                  <div class="rq-listing-search">
                    <div class="rq-search-content">
                      <div class="row">
                        <div class="col-sm-6">
                          <input type="text" class="rq-form-element" placeholder="Min Bathroom"/>
                        </div>
                        <div class="col-sm-6">
                          <input type="text" class="rq-form-element" placeholder="Max Bathroom"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
                            <div class="rq-listing-sidebar">
                                <h3 class="rq-title-secondary no-extra-style">Property Types</h3>
                                <div class="rq-search-content">
                                    <ul class="nav">
                                        <li>
                                            <span class="rq-checkbox">
                                                <input type="checkbox" id="class-a">
                                                <label for="class-a">Commercial</label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rq-checkbox">
                                                <input type="checkbox" id="class-b">
                                                <label for="class-b">Residental</label>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rq-listing-sidebar">
                                <h3 class="rq-title-secondary no-extra-style">New Homes</h3>
                                <div class="rq-search-content">
                                    <ul class="nav">
                                        <li>
                                            <span class="rq-checkbox">
                                                <input type="checkbox" id="class-j">
                                                <label for="class-j">New Build</label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rq-checkbox">
                                                <input type="checkbox" id="class-k">
                                                <label for="class-k">Pre - Owned</label>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rq-listing-sidebar">
                                <button class="rq-btn rq-btn-primary fluid-btn">Filter <i class="arrow_right"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- /.page-content -->
    </div> <!-- end #main-wrapper -->

    @include('Footer')

    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.mousewheel.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/selectize.min.js')}}"></script>
    <script src="{{ asset('js/jquery.sticky.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.counterup.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <script src="{{ asset('js/owl-carousel.js')}}"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/scripts.js')}}" type="text/javascript"></script>
</body>

</html>