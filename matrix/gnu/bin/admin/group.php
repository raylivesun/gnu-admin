<?php
     date_add_timezone_set('Brazil/Portuguese', 'UTC');
     echo date('h:i:s', time());
     echo '<br/>';
     // echo date 
     output_add_rewrite_variable('country', 'country');
     // select country from country table
     $country = $db->get_browser_country(); // country table name
     $country = explode(',', $country); // city table name
     $country = $country[0]; // city table name and country code
     $country = strtolower($country); // country code
     $country = str_replace(' ', '', $country); // country code magic number for reference purposes gorups code
     
     // select city from city table
     $city = $db->get_browser_city(); // city table name
     $city = explode(',', $city); // city table name
     $city = $city[0]; // city table name and country code
     $city = strtolower($city); // country code
     $city = str_replace(' ', '', $city); // country code magic number for refrence purposes groups codes

     // select region from region table
     
     $region = $db->get_browser_region(); // region table name
     $region = explode(',', $region); // region table name
     $region = $region[0]; // region table name and country code
     $region = strtolower($region); // country code

     

?>