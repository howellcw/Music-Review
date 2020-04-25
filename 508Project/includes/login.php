<?php

session_start();

if(isset($_POST['submit'])){

    include_once 'connection.php';
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);


    //Check if inputs are empty

    if(empty($email) || empty($pass)){
        header("Location: ../index.php?login=empty");
        exit();
    }else {
        $sql = "SELECT * FROM users WHERE email= '$email'";
        $result = mysqli_query($conn, $sql);
        $resultChecker = mysqli_num_rows($result);
        if($resultChecker < 1){
            header("Location: ../incorrectPass.php");
            exit();
        }
        else{
            if($row = mysql_fetch_assoc($result)){
                //dehash the password to compare
                $hashedpasschecker = password_verify($pass, $row['customer_password']);
                if(!$hashedpasschecker){
                    header("Location: ../incorrectPass.php");
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
                    header("Location: ../incorrectPass.php");
                    exit();
                }
            }
        }
    }



}else{
    header("Location: ../index.php?login=error");
    exit();
}