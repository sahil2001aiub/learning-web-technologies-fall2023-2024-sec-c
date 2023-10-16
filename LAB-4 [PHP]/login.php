<?php

if(isset($_REQUEST["submit"]))
{
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];

}

?>
<html>
<head>
    
    <title>Login Page</title>
</head>
<body>
    <form action="" method="request">
        <fieldset>
            <legend><b>LOGIN</b></legend>
            <table cellpadding="5">
                <tr>
                    <td>User Name: </td>
                    <td><input type="text" name="username" value="" placeholder="enter your username!"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="" placeholder="enter your password!"></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="checkbox" name="checkbox" id="">Remember Me</td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="" id="" value="Submit">
                        <a href="changepassword.php">Forgot Password?</a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>