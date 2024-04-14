<?php
     date_format($http_response_header); // date format string for http response header
     echo '<br/>'; // make sure response headers are property values
     echo date_format($http_response_header); // values for http response headers
     echo '<br/>'; // sure there are values for http headers

     // dynamic function to display the popup window
     $dynamic = window.opendir(ABDAY_1, true); // first element to display
     echo date_format($dynamic); // date format string
     echo '<br/>'; // set the timezone string
     echo tidy($dynamic); // set the timezone string to control the popup window
     echo '<br/>'; // set the timezone string

     // static function to display the popup window
     $static = new webObject(); // static object constructor
     
?>