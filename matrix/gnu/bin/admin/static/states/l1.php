<?php
     date_default_timezone_set('Brazil/Portuguese'); // default to English output locale
     echo date('Y-m-d H:i:s', time()); // default to English output locale
     echo '<br/>'; // default to English

     // default to English
     $output_cache_put = $this->get_browser_region_output_cache_directory() . '/' . $this->get_browser();
     echo date('Y-m-d H:i:s', time()); // default to English output locale
     echo '<br/>'; // default to English
     $stream = fopen($this->get_browser_region_output_cache_directory() . '/' . $this->get_browser()); // read from fopen
     echo date('Y-m-d H:i:s', time()); // default to English output locale
     echo '<br/>'; // default to English

     // default to English
     $log1p = fopen('php://output', 'r'); // read from fopen
     echo date('Y-m-d H:i:s', time()); // default to English output locale
     echo '<br/>'; // default to English

     // defaul to English
     $layerObj = new Layer(); // create a new Layer object with the current layer information
     
?>