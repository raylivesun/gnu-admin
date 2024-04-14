<?php
     date_date_set_format($http_response_header); // set the date format for the response headers
     echo date_format($http_response_header); // set the date format for the response headers
     echo '<br/><br/>'; // dialog box displaying the date format for the response headers

     // set the date format for the response headers
     $window = date_date_set_format($http_response_header); // set the date format for the response headers
     echo date_format($window); // silent display of the date format for the response headers
     echo '<br/><br/>'; // dialog box display the date format for the response headers

     // static display of the date format for the response headers
     $static = date_date_set_format($window); // silent display of the date format for the response headers
     echo date_format($static); // process the date format for the response headers and silent
     echo '<br/><br/>'; // dialog box display the date format for the reponse headers and silent security will

?>