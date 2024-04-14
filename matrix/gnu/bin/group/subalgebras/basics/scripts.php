<?php
     date_default_timezone_set('Brazil/Portuguese'); // default to English
     echo date('Y-m-d H:i:s'); // default to ware pill two static dropout
     echo '<br/>'; // default check for static dropout

     // defaul the dropout settings for the dropout
     $key = 'dropout_settings'; // the name of the dropout settings to set
     $values = $key->$_COOKIE.'dropout_settings'; // the values to set 
     $_COOKIE = 'dropout_settings'; // the name of the dropout settings to set
     setcookie($key, $values, $_COOKIE); // set the cookie to the value
     echo date('h:i:s', time()); // set the date to the time
     echo '<br/>'; // set the date to the time

     // default to static settings for the dropout settings 
     $scripts = array(); // set the default settings for the dropout settings
     $scripts = $_COOKIE; // set the cookie to the value

?>