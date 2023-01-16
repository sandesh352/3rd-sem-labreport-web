<?php include("../config/constants.php")?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="new.css">
</head>

<body>
    <form action="" method="POST">
        <?php
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset ($_SESSION['login']);
        }
        if(isset( $_SESSION['no-login-message']))
        {
            echo $_SESSION['no-login-message'];
            unset ($_SESSION['no-login-message']);
        }
        ?>
        <br>
        <div class="back">
    </div>
    <div class="front">
        <form action="">
            <h2>LOGIN</h2>
         <div class="box">
            <tr>

                <td><input type="text" name="username" placeholder="Enter your name" class="focus"></td>
            </tr>
        </div>
        <div class="box">
            <br>
            <br>
            <tr>
                <!-- <td>Password:</td> -->
                <input type="password" name="password" placeholder="Enter your password" class="focus">
            </tr>
         </div>
            <br>
            
            <tr>
                

                <td> <input type="submit" name="submit" value="login" class="btn">
                </td>
            </tr>
        </form>




    </div>
    </form>
</body>

</html>


<?php

//check whether the submit is clicked or not
if(isset($_POST['submit']))
{
    //process for login
    //get the data from login from
//   $username=$_POST['username'];
//     $password=md5($_POST['password']);
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    // $password=md5($_POST['password'])
    $password=md5(mysqli_real_escape_string($conn,$_POST['password']));

    //creating sql query to check whether the user with username and passqword exists or not
    $sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

    //exectue the query

    $res=mysqli_query($conn,$sql);
    // count rows to check whether user exists or not
    $count=mysqli_num_rows($res);
    if($count==1)
    {
        //user available and login success
        $_SESSION['login']="<div class='sucess'>login success</div>";
        //redirect to homepage/dashboard
        $_SESSION['user']=$username; //to check whether the user is  login or not and logout will unset is 

        header('location:'.SITEURL.'admin/');
    }
    else{
//user not found and login unsuccess
$_SESSION['login']="<div class='unsucess'>login unsuccess</div>";
//redirect to homepage/dashboard
header('location:'.SITEURL.'admin/admin.php');
}
    }


?>