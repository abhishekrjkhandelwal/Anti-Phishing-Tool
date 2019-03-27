<?php

$image = $_POST['image'];

$location = "upload/";

$image = explode(";base64,", $image);

$image_base64 = base64_decode($image_parts[1]);

$filename = "screenshot_".uniqid().' .jpg';
$file = $location . $filename;
file_put_contents($file, $image_base64);