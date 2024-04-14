<?php
      date_default_timezone_set('Brazil/Portuguese'); // default to English
      echo date('Y-m-d H:i:s'); // default to English
      echo '<br/>'; // default to English

      // default to English
      $labelObj = new Label(); // label object for the current language
      $output_cache_put = $this->get_browser_region_output_cache_directory() . '/' . $this->get_browser();
      echo date('Y-m-d H:i:s'); // default to English
      echo '<br/>'; // default to English
      $stream = fopen($output_cache_put); // read from fopen() function stream is available in browser
      echo date('Y-m-d H:i:s'); // default to English
      echo '<br/>'; // default to English

      // default to English
      $irrep = sin($output_cache_put);
?>