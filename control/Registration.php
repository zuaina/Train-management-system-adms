<?php
session_start();
include("../model/db.php");
$conError="";
if(isset($_POST["submit"])){
    $conn=oci_connect('scott','tiger','localhost:1521/XEPDB1');
    if($conn)
        $conError = "Connection established";
    else{
        echo "Connection failed";
        $err = oci_error();
    }
    $signupError="";

    $stmt = oci_parse($conn, "INSERT INTO USERS (user_id, user_name, user_mob, user_email, user_address, gender, age, user_pass) VALUES 
                    (user_sequence.nextval, :Name, :Mob, :Email, :Address, :Gender, :Age, :Password)");

    oci_bind_by_name($stmt, ':Name', $_POST['name']);
    oci_bind_by_name($stmt, ':Mob', $_POST['mob']);
    oci_bind_by_name($stmt, ':Email', $_POST['email']);
    oci_bind_by_name($stmt, ':Address', $_POST['address']);
    oci_bind_by_name($stmt, ':Gender', $_POST['gender']);
    oci_bind_by_name($stmt, ':Age', $_POST['age']);
    oci_bind_by_name($stmt, ':Password', $_POST['password']);
    
    
    


    $result = oci_execute($stmt);
    if($result){
        header("Location: login.php");
    }
    else{
        $e = oci_error($stmt);
        $registerError = htmlentities($e['message'], ENT_QUOTES);
    }
}

?>
