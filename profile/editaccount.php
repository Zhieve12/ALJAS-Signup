<?php
    include_once("../dbSignupConnection/mysqlconfig_connection.php");

    $id=$_GET['id'];
    $result = mysqli_query($dbc, "SELECT * FROM tbsignup WHERE signupID=$id");
    while($res = mysqli_fetch_array($result)){
        $First_Name= $_POST['First_Name'];
        $Middle_Name= $_POST['Middle_Name'];
        $Last_Name= $_POST['Last_Name'];
        $Email= $_POST['Email'];
        $Contact_Number= $_POST['Contact_Number'];
        $Gender= $_POST['Gender'];
    }
?>
<!DOCTYPE html>
<html>
    <head>Edit Profile</head>
    <body>
        <h1>Edit Profile</h1>
        <a href="../index.php">HOME</a>
        <br><br/>
        <form action="signup1" method="post" action="../function/editprofile.php">
            <table border="0">
                <tr>
                <td>Fist Name</td>
                    <td><input type="text" name="First_Name" id="First_Name"></td>
                </tr>
                <tr>
                    <td>Middle Name</td>
                    <td><input type="text" name="Middle_Name" id="Middle_Name"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="Last_Name" id="Last_Name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="Email" name="Email" id="Email"></td>
                </tr>
                <tr>
                    <td>Contact Number</td>
                    <td><input type="number" name="Contact_Number" id="Contact_Number"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="text" name="Gender" id="Gender"></td>
                </tr>
                
            </table>
        </form>
    </body>
</html>