<?php
/**
 * Created by PhpStorm.
 * User: AbdullahFaqeir
 * Date: 3/13/18
 * Time: 7:05 PM
 */

require_once 'functions.php';

$query = [];

if ( isset( $_GET['do'] ) ) {
	$query[''] = '';
}

$Hotels = loadHotels( $query );

$hotel = new Hotel();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Expedia Hotels</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="https://getbootstrap.com/docs/3.3/examples/blog/blog.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="#">Home</a>
            <a class="blog-nav-item" href="#">New features</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item" href="#">New hires</a>
            <a class="blog-nav-item" href="#">About</a>
        </nav>
    </div>
</div>
<br/>
<br/>
<div class="container">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
        <div id="Hotels-List" class="col-xs-12 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Offers List</h3>
                </div>
                <div class="panel-body">
					<?php foreach ( $Hotels as $hotel ): ?>
						<?php

						/**
						 * @var Hotel
						 */
						$hotelObj = $hotel;

						?>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object"
                                         src="<?php echo $hotelObj->getHotelInfo()->getHotelImageUrl() ?>"
                                         alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $hotelObj->getHotelInfo()->getHotelName() ?></h4>
                                <div class="hotel-location pull-left">
                                    <p><strong><?php echo $hotelObj->getDestination()->getCountry() ?></strong>,
                                        <i><?php echo $hotelObj->getDestination()->getCity() ?></i></p>
                                </div>
                                <div class="hotel-prices pull-right">
                                    <del class="old-prive"><?php echo $hotelObj->getHotelPricingInfo()->getCrossOutPriceValue() ?></del>
                                    <mark class="new-price"><?php echo $hotelObj->getHotelPricingInfo()->getTotalPriceValue() ?></mark>
                                </div>
                                <div class="clearfix"></div>
                                <small>(<?php echo $hotelObj->getHotelInfo()->getHotelReviewTotal() ?>) reviews</small>
                            </div>
                        </div>
					<?php endforeach; ?>
                </div>
            </div>
        </div>
        <div id="Filters-Box" class="col-xs-6 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Offers List</h3>
                </div>
                <div class="panel-body">
                    <div class="input-group input-group-lg">

                        <input type="date" class="form-control" placeholder="" aria-describedby="sizing-addon1">
                    </div>

                    <div class="input-group input-group-lg">

                        <input type="date" class="form-control" placeholder="Username" value="<?php echo "" ?>" aria-describedby="sizing-addon1">
                    </div>

                    <div class="input-group input-group-lg">

                        <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                    </div>
                      <button>search</button>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
