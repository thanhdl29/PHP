<?php
//set the default timezone to use.
date_default_timezone_set('Asia/Ho_Chi_Minh');
// Prints something like: Monday
// $date_time = date("l");

// Prints something like: Wednesday 28th of February 2024 11:03:07 AM
// $date_time = date('l jS \of F Y h:i:s A');

$hours = date('H');
// $hours = 20;
echo $hours;
if($hours<12){
    echo " Good morning";
}elseif($hours >= 12 && $hours <= 17){
 echo " Good afternoon";
}else{
    echo " Good evening";
}