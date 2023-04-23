<?php
$presentTime = new DateTime;
echo $presentTime->format('M d Y A h:i ') . '<br>';

$dateDestination = '2077-12-25 00:00:01';
$destinationTime = new DateTime($dateDestination);
echo $destinationTime->format('M d Y A h:i') . ' ' . 'Merry Mega-Xmas!' . '<br> <br>';

$difference = $presentTime->diff($destinationTime);
echo "Time until destination: " . $difference->format('%y years, %m months, %d days, %h hours, %i minutes, %s seconds') . '<br>';

$minutes = ($difference->days * 24 * 60) + ($difference->h * 60) + ($difference->i);
echo "Time until destination in minutes: " . $minutes . '<br>';

$fuel = $minutes / 10000;
echo "You will need " . ceil($fuel) . " liters of fuel to reach your destination.";
