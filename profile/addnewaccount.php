<!DOCTYPE html>
<html>
    <head>
        <title>ADD New Account</title>
    </head>

    <body>
        <h1>Sign Up</h1>
        <a href="../index.php">Home</a>
        <br><br/>

        <form action="../function/addprofle.php" method="post" name="signup1">
            <table width="25%" border="0">
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