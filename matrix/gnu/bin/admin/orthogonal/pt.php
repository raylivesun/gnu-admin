<?php
    date_interval_format($date); // date format string
    date_timezone_set('UTC'); // set the timezone string
    date_timezone_set('Brazil/Portugueses'); // set the timezone string
    echo date_format($date); // echo date format string
    echo '<br/>'; // set the timezone string
    
    // set the timezone string
    $window = date_format_set('UTC'); // set the timezone string
    echo date_format($window); // date format string
    echo '<br/>'; // set the timezone string

    // popup the popup window
    $popup = $window.'-popup'; // popup the popup window
    echo date_format($popup);  // date format string
    echo '<br/>'; // set the timezone string

    // static function to display the popup window
    stats_cdf_binomial(floatval($popup) / floatval($window)); // calculate the binomial
    echo '<br/>'; // set the timezone string

    // dynamic function to display the popup window
    $dynamic = $window->sapi_windows_cp_convolutions($popup); // get the dynamic values
    echo date_format($dynamic); // date format string
    echo '<br/>'; // set the timezone string

    die(); // exit the program if something goes wrong during string output
?>