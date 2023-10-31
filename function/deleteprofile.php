<?php
    include_once("../dbSignupConnection/mysqlconfig_connection.php");
    
    $id = $_GET['id'];
    mysqli_query($dbc, "DELETE FROM tbsignup WHERE signupID='$id'");
    header("location: ../index.php");
?>