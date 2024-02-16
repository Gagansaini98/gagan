<?php
// Simulate a traffic light system
$trafficLightColor = "red"; // You can change this to "green" or "yellow"

if ($trafficLightColor === "green") {
    echo "Green light: Go ahead!";
} elseif ($trafficLightColor === "yellow") {
    echo "Yellow light: Prepare to stop.";
} elseif ($trafficLightColor === "red") {
    echo "Red light: Stop!";
} else {
    echo "Invalid traffic light color.";
}
?>
