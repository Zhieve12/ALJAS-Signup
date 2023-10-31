<?php
    include_once("dbSignupConnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pentech:Sign UP</title>
    </head>
    <body>
        <h1>Welcome to Pentech</h1>
        <a href="profile/addform.php">Sign up</a><br><br>
        <table width='100%' border= 1>
            <tr bgcolor="gray">
                <td>signupID</td>
                <td>First_Name</td>
                <td>Middle_Name</td>
                <td>Last_Name</td>
                <td>Email</td>
                <td>Contact_Number</td>
                <td>Gender</td>
                
            </tr>
            <?php
                while($res = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$res['signupID']."</td>";
                    echo "<td>".$res['First_Name']."</td>";
                    echo "<td>".$res['Middle_Name']."</td>";
                    echo "<td>".$res['Last_Name']."</td>";
                    echo "<td>".$res['Email']."</td>";
                    echo "<td>".$res['Contact_Number']."</td>";
                    echo "<td>".$res['Gender']."</td>";
                    echo "<td><a href=\"profile/editprofile.php?id=$res[signupID]\">Edit</a> |
                            <a href=\"functions/deleteprofile.php?id=$res[signupID]\onclick=\"return confirm('Are you sure you want to delete this account?')\"Delete</a></td>";
                }
        </table>
    </body>
</html>