<?php

function timeConversion($s) {
    $time_in_12_hour_format  = date("g:i a", strtotime($s));
    // 12-hour time to 24-hour time 
    $time_in_24_hour_format  = date("H:i:s", strtotime($s));
    return $time_in_24_hour_format;
}

$s = "07:05:45PM";
$result = timeConversion($s);
echo $result;
?>