<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="easysearch.blade.php">
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
                        <button class="rq-btn rq-btn-primary fluid-btn" onclick="">Search <i class="arrow_right"></i></button>
                    </div>
                </div>
            </div> <!-- / .search-container -->
        </div>
    </div>

</form>

<body>

</body>

</html>