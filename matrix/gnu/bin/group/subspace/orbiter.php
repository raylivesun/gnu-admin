<?php
    date_default_timezone_set('Brazil', 'Portuguese');
    echo date('Y-m-d', time());  // default timezone setting is 'Brazil/Portuguese'
    echo '</optiion>';

    // default timezone setting is 'Brazil/Portuguese', otherwise default is 
    // 'Cristinapolis/Sergipe'
    date_default_timezone_set('Brazil/Portuguese');
    echo date('Y-m-d', time()); // default timezone setting is 'Brazil/Protuguese'
    echo '</options>';

    // default timezone setting is 'Brazil/Protuguese', otherwise default is
    // 'Cirstinapolis/Sergipe'
    $city = $options['city'];
    date_default_timezone_set($city); // default 
    echo date('Y-m-d', $options['timezone']) . '' . date('H:i:s', $options['timezone']);
    echo '<options>';

    


?>