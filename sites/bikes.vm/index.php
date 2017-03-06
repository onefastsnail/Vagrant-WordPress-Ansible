<?php
$servername = 'localhost';
$database = 'bikes';
$username = 'bikes';
$password = 'test';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo '<div style="text-align:center;"><img src="http://fakeimg.pl/650x150/eeeeee/666/?text=Image+Proxy+Works!" alt="fake img"/></div>';

echo '<div style="text-align:center;"><h1>'.$database.' Database connection successfull!</h1></div>';

echo phpinfo();