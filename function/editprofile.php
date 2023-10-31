<?php
    include_once("../dbSignupConnection/mysqlconfig_connection.php");
    if (isset($_POST['update'])){
        $id= $_POST['id'];
        $First_Name= $_POST['First_Name'];
        $Middle_Name= $_POST['Middle_Name'];
        $Last_Name= $_POST['Last_Name'];
        $Email= $_POST['Email'];
        $Contact_Number= $_POST['Contact_Number'];
        $Gender= $_POST['Gender'];
            
        if(empty($First_Name)|| empty($Middle_Name) || empty($Last_Name)|| empty($Email) || empty($Contact_Number)|| empty($Gender)){
            if(empty($First_Name)){
                echo "<font color='red'>First Name Field is empty.</font>";
            }
            if(empty($Middle_Name)){
                echo "<font color='red'>Middle Name Field is empty.</font>";
            }
            if(empty($Last_Name)){
                echo "<font color='red'>Last Name Field is empty.</font>";
            }
            if(empty($Email)){
                echo "<font color='red'>Email Field is empty.</font>";
            }
            if(empty($Contact_Number)){
                echo "<font color='red'>Contact Number Field is empty.</font>";
            }
            if(empty($Gender)){
                echo "<font color='red'>Gender Field is empty.</font>";
            }
    }else{
        mysqli_query($dbc, "UPDATE tbsignup set First_Name='$First_Name', Middle_Name='$Middle_Name', Last_Name='$Last_Name', Email='$Email', Contact_Number='$Contact_Number', Gender='$Gender' WHERE signupID='$id'");
        header("location: ../index.php");
    }
}
?>
    