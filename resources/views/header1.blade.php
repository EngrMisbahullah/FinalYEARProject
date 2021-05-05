<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="headroom-sticky sticky-scroll">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{ asset('img/real-estate/logo6.png') }}" alt="" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class=""><a href="smartbuilder.blade.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contractor <span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="Construction.blade.php">Construction</a></li>
                                <li><a href="plumber.blade.php">Plumber</a></li>
                                <li><a href="tile.blade.php">Tile</a></li>
                                <li><a href="electrical.blade.php">Electrical</a></li>
                                <li><a href="furniture.blade.php">Furniture</a></li>
                                <li><a href="painting.blade.php">Paintining</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Labor <span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="labormeason.blade.php">Mason</a></li>
                                <li><a href="electricianlabor.blade.php">Electrician</a></li>
                                <li><a href="laborplumber.blade.php">Plumber</a></li>
                                <li><a href="furniturelabor.blade.php">Furniture</a></li>
                                <li><a href="tileslabor.blade.php">Tile</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shops<span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="materialshop.blade.php">Material Shops</a></li>
                                <li><a href="furnitureshop.blade.php">Furniture Shops</a></li>
                                <li><a href="plumbershop.blade.php">Plumber Shops</a></li>
                                <li><a href="tilesmaterialshop.blade.php">Tile Shops</a></li>
                                <li><a href="electricshop.blade.php">Electrical Shops</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Explore <span class="ion-chevron-down"></span></a>
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
</body>

</html>