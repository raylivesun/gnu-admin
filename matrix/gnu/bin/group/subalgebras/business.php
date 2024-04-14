<?php
    date_create_time(new \DateTime('now')); // create time input field business date format string
    date_add_timezone_set('UTC');           // set the current time to UTC
    echo date('h:i:s', time());             // output business date format string
    echo '<br/>';  // agreements are displayed objects that represent agreements
    
    // print the current status of the database and string to stout message form agreements
    $business = $this->db_open_business(); // business information object product items object values
    echo 'Database Business: ' . $business->opendir('business') . '\n'; // prints business information 
    echo 'String Business: ' . $business->opendir('business') . '\n'; // prints business information
    echo 'Number Business: ' . $business->ob_start() . '\n'; // prints business information
    echo 'Date Business: '  . $business->date_add() . '\n'; // prints business information
    echo 'Time Business: '  . $business->time_add() . '\n'; // prints business information
    echo 'Success Business: ' . $business->success_business() . '\n'; // print business information

    // set the thems property for the business object
    $business->property_exists('success_business') ? $business->success_business() : $business->$_SERVER['PHP_ENGLISH'];
    echo '<div class="business_status">' . $business->success_business() . '</div>'; // print business information
    echo '<div class="address">' . $business->success_business() . '</div>'; // print business information
    echo '<div class="city">' . $business->success_business() . '</div>'; // print business information
    echo '<div class="state">' . $business->success_business() . '</div>'; // print business information
    echo '<div class="country">' . $business->success_business() . '</div>'; // print business information
    echo '<div class="success">' . $business->success_business() . '</div>'; // print business information
    
    // set then display the business information
    $display = true; // display the business information in the table
    $business->locale_get_display_script($display);     
?>