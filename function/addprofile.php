<!DOCTYPE html>
<html>
    <head>
        <title>Add Profile</title>
    </head>
    <body>
        <?php
        include_once("../dbSignupConnection/mysqlconfig_connection.php");
        
        if (isset($_POST['Submit'])){
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
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
            }
            else{
                $result = mysqli_query($dbc, "INSERT INTO tbsignup(First_Name,Middle_Name,Last_Name,Email,Contact_Number,Gender) Values('$First_Name','$Middle_Name','$Last_Name','$Email','$Contact_Number','$Gender')");
                echo "<font color='black'>Account Successfully Added.";
                echo "<br/><a href='../index.php'>View Profile</a>";
            }
        
        }
        ?>
    </body>
</html>