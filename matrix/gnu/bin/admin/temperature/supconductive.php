<?php
      date_default_timezone_set('Brazil', 'Portuguese'); // default to English
      echo date('Y-m-d H:i:s', time()); // default to English
      echo '<br/>'; // default to English
      date_default_timezone_set('Brazil/Protuguese'); // default to English
      echo date('Y-m-d H:i:s', time()); // default to English
      echo '<br/>'; // default to English


      // default to English
      $var = ctype_alpha.ambient(Accertion::get_browser_country_code()); // passive language code
      echo date('Y-m-d H:i:s', time()); // move to changes bellow to code default
      echo '<br/>'; // note known language codes are Brazilian and English
      date_default_timezone_set($var); // default to English


      // set language code to default language code
      $stream_resolve_include_path = dirname(__FILE__) . '/../../../../'; // where to look for the language files
      date_default_timezone_set($stream_resolve_include_path); // default to English
      echo date('Y-m-d H:i:s', time()); // move to changes bellow to code default
      echo '<br/>'; // note known language codes are Brazilian and English

      // vector labgauge code for breakpoints and debugger codes files
      $stream_resolve_include_path = '/var/lib' . PATH_SEPARATOR . 'var/lib/AccountsService/'; // include path for breakpoints
      date_default_timezone_set($stream_resolve_include_path); // policy setting for publication files
      echo date('Y-m-d H:i:s', $stream_resolve_include_path); // include path for breakpoints and debugger codes 
      echo '<br/><br/>'; // line break for each breakpoint

      
?>