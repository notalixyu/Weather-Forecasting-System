<?php

session_start();
//Set up the database access credentials

$hostname = 'stu-db.aet.leedsbeckett.ac.uk';

$username = 'c3601872'; //your standard uni id

$password = 'MyDB12786014'; // the password found on the W: drive

$databaseName = 'c3601872'; //the name of the db you are using on phpMyAdmin

$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");

