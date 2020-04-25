<?php

if(isset($_POST['submit'])){

    include_once 'connection.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    //checking for errors
    //Check for empty fields

    if(empty($name) || empty($email) || empty($age) || empty($password) || empty($gender)){

        header("Location: ../empty.php");
        exit();

    } else {
        //Check for valid input characters
        if(!preg_match("/^[a-zA-Z]*$/",$name)){
            header("Location: ../invalidString.php");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $resultChecker = mysqli_num_rows($result);
            if($resultChecker > 0){
                header("Location: ../takenEmail.php");
                exit();
            }
            else{
                //Hashing users passwords
                $hashedPass = password_hash($password, PASSWORD_DEFAULT);
                //Insert user into database
                $sql = "INSERT INTO users (name, email, age, password, gender) VALUES ('$name', '$email', '$age', '$hashedPass', '$gender');";
                mysqli_query($conn, $sql);
                header("Location: ../success.php");
                exit();
            }
        }
    }
    





} else{
    header("Location: ../signup.php");
    exit();
}