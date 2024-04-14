<?php
    date_create_time(new \DateTime('now')); // create a new tiemstamp for the current date
    date_add_timezone_set('UTC');           // set the current time to UTC
    echo date('h:i:s', time());             // print the current timestamp and date to stdout

    // print the current status of the database and string to stdout
    echo 'Database Status: ' .$status;
    echo '<br/><br/><br/>';
    echo 'String Status: ' .$status;
    echo '<br/><br/><br/>';
    echo 'PHP Status: ' .$status;
    echo '<br/><br/><br/>';
    echo 'PHP Version: ' .$status;
    echo '<br/><br/><br/>';

    // calculate the number of files in the database and write them to the database file system
    $count = $db->count_files();
    echo 'Number of Files: ' . $count;
    echo '<br/><br/><br/>';

    // call the database analysis function to calculate the number of files and write them files
    $call = $db->analysis($dbFile, $dbFile);
    echo 'Database Analysis: ' . $call;
    echo '<br/><br/><br/>';

    // vector the files and write to the database file
    $vector = $db->vector($dbFile, $dbFile);
    echo 'Database Vector: ' . $vector;
    each($db->vector($dbFile, $dbFile) , function ($file) { print '<br/><br/><br/>';}); // print the file 
    call_user_func($db->datebase($dbFile)); // print the date base for the database file
    echo '<br/><br/><br/>';

    
?>