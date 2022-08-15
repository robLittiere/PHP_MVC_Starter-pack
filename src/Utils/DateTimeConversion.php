<?php

function convertTimeToString($seconds): String{
    $time = round($seconds);
    $actual_time =  sprintf('%02d:%02d:%02d', ($time/3600),($time/60%60), $time%60);
    $time_array = explode(':', $actual_time);
    // If its less than one hour
    if($time_array[0] == '00'){
        $string = $time_array[1] . "m" . $time_array[2] . "s";
        return $string;

    }
    $string = $time_array[0] . "h" . $time_array[1] . "m" . $time_array[2] . "s";
    return $string;

}



?>