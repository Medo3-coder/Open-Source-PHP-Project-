<?php

$jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");

//pass json data into array 

$data = json_decode($jsonData , true);   // When TRUE, returned objects will be converted into associative


foreach($data as $key => $value)
{
     $Days_count = count($value) - 1 ; 

     $Days_count_prev = $Days_count - 1 ;  
}

$total_confirmed = 0 ; 
$total_recoverd  = 0 ;
$total_deaths    = 0 ; 


foreach($data as $key => $value)
{
    $total_confirmed = $total_confirmed + $value[$Days_count]['confirmed'];
    $total_recoverd = $total_recoverd + $value[$Days_count]['recovered'];
    $total_deaths   =   $total_deaths + $value[$Days_count]['deaths'];

}





?>