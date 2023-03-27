<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Validation checks
    if(empty($email) || empty($password)) {
        echo "Please fill all the fields.";
    }
    else {
        //All validation checks passed
        //Code to check if user exists in database and password is correct
        //If login is successful, redirect to welcome page
        //If login fails, display error message
        // if(/Code to check user exists in database and password is correct/)
     }
    }