<?php
$connection = new mysqli("localhost","root","","registration");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}
