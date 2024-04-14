<?php
     date_default_timezone_set('Brazil/Portuguese'); // default to English
     echo date('Y-m-d H:i:s'); // default to English states and months
     echo '<br/>'; // default to English

     // default to English
     $var = ctype_alpha.ambient($_SERVER.'/'.$_SERVER('REQUEST_URI')); // default to English
     echo date('Y-m-d H:i:s'); // default to English
     echo '<br/>'; // default to English
     date_default_timezone_set($var); // pass default timezone to time
     echo date('Y-m-d H:i:s'); // set default timezone to English

     // coffee timezone setting 
     com_get_active_object($var); // get active object from active coffee statement good morning days
     echo date('Y-m-d H:i:s');    // set coffee timezone to English
     echo '<br/>'; // default to English

?>