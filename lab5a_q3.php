<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head><?php

function calculateArea($length, $width) {
    return $length * $width;
}

$length = 4; 
$width = 2;   
$area = calculateArea($length, $width);


echo "<b>The area of the rectangle with length $length and width $width 
      is $area.</b>";
?>

