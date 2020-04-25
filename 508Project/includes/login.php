<?php

session_start();

if(isset($_POST['submit'])){

    include_once 'connection.php';
    $eml = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);


    //Check if inputs are empty

    if(empty($eml) || empty($pass)){
        echo"empty login $eml & $pass";
        //header("Location: ../index.php?login=empty");
        exit();
    }else {
        $sql = "SELECT * FROM users WHERE email= '$email'";
        $result = mysqli_query($conn, $sql);
        $resultChecker = mysqli_num_rows($result);
        if($resultChecker < 1){
            echo "$email , $password";
            //header("Location: ../incorrectPass.php");
            exit();
        }
        else{
            if($row = mysqli_fetch_assoc($result)){
                //dehash the password to compare
                $hashedpasschecker = password_verify($pass, $row['password']);
                if(!$hashedpasschecker){
                    echo "$email , $password  2";
                    //header("Location: ../incorrectPass.php");
                    exit();
                }
                elseif($hashedpasschecker){
                    //login user
                    $_SESSION['user_id'] = $row['userId'];
                    $_SESSION['user_name'] = $row['name'];
                    $_SESSION['user_gender'] = $row['gender'];
                    $_SESSION['user_age'] = $row['age'];
                    echo"success";
                    header("Location: ../index.php?login=successful");
                    exit();
                }
                else{
                    echo "$email , $password   3";
                    //header("Location: ../incorrectPass.php");
                    exit();
                }
            }
        }
    }



}else{
    header("Location: ../index.php?login=error");
    exit();
}