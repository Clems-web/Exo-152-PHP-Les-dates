<?php

// Premiere ligne

echo date('l jS \of F Y')."<br>";
//
$time = strtotime("10/12/2018");
echo date("Y.d.m", $time)."<br>";
//
$hours = strtotime("11:35:07");
echo date("H:i:s", $hours);




