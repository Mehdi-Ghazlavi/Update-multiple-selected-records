<?php
$conn = new mysqli('localhost','root','','phpajax');
if($conn->connect_error) {
    die('Error : ('. $conn->connect_error .')'. $conn->connect_error);
}