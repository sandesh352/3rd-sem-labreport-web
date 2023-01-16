<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table>
        <tr>
                <td>username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit" value="submit"></td>
            </tr>

        </table>
    </form>
</body>
</html>

<?php
define('SITEURL','http://localhost/lab3/4/');
$conn=new mysqli('localhost','root','','db');
if(isset($_POST['submit']))
{

    $username=$_POST['username'];

    $password=$_POST['password'];

    //creating sql query to check whether the user with username and passqword exists or not
    $sql="SELECT * FROM login WHERE name='$username' AND password='$password'";

    //exectue the query

    $res=mysqli_query($conn,$sql);
    // count rows to check whether user exists or not
    $count=mysqli_num_rows($res);
    if($count==1)
    {


        header('location:'.SITEURL.'we.php');
    }
    else{

header('location:'.SITEURL.'un.php');
}
    }






?>


