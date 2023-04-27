<?php
session_start();
$loginError="";
if(isset($_POST["submit"])){
    $conError="";
    $conn=oci_connect('scott','tiger','localhost:1521/XEPDB1');
    if($conn)
        $conError = "Connection established";
    else{
        echo "Connection failed";
        $err = oci_error();
    }
    

    

    $loginUser = oci_parse($conn, "SELECT * FROM USERS WHERE user_name='".$_POST["username"]."'");
    oci_execute($loginUser);
    while(($row=oci_fetch_array($loginUser, OCI_BOTH)) != false){
        if($_POST["password"]== $row[7]){
            $loginError = "Login successful";
            $_SESSION['username'] = $row['username'];
            header("Location: ../view/homeee.php");
        }
        else{
            $loginError = "Login failed";
            header("Location: ../view/login.php?le=".$loginError);
        }
    }
   
    
}

?>
