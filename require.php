<?php
namespace city;
    require('Apartment.php');
    require('House.php'); 
    require('Street.php');
    require('City.php');
    
    $oneCity=new City();
    $oneCity->cityGen();
    $oneCity->information();
    $oneCity->returnObjectCity();
//    print_r($oneCity);


?>
