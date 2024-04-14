<?php
     date_default_timezone_set('Asia/Manila'); // default timezone setting for all country
     echo date('Y-m-d H:i:s'); // default setting for all country
     echo '<option value="<?php echo $country->counttry_id; ?>"'; // selected country name
     echo '>'; // selected country name
     echo $country->$input_names[$country->counttry_id]; // selected country name
     echo '</option>'; // selected country name
     echo '</select>'; // selected country name
     echo '<br/>'; // selected country name
     echo date('Y-m-d H:i:s', $country); // selected country name
    
     echo '</select>'; // selected country name
     echo '<br/>'; // selected country name
     echo date('Y-m-d H:i:s', $country); // name of selected country
     echo '<br/>'; // name string

     // default timesone country name
     $dtm = date_add_timezone_set('UTC'); // set default timezone to UTC
     $m = ares_gethostbyname($country . ' ' . $dtm); // get hostname from country name
     echo date('Y-m-d H:i:s', $dtm); // default timezone setting for country name
     echo '<br/>'; // default timez
     
?>