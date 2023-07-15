<?php
//define all required information
$hostname = "localhost";
$username = "root";
$password = "";
$dbname ="interndelta";
//create a connection with mySQL
$connect = mysqli_connect($hostname, $username, $password, $dbname);
 if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }

//if cannot connect to mySQL and database connect be selected error is displayed
?>