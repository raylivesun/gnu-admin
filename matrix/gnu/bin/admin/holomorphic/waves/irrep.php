<?php
      date_create_from_format('Y-m-d H:i:s', $_SERVER); // date_create_from format string
      echo date('Y-m-d', $_SERVER); // date_create_from format string
      echo '<br/>'; // default to English

      // default to English
      gd_info('default', 'English'); // default to English
      echo '<br/>'; // default to English
?>