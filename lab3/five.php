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
                <td>name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>phone number</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr>
                <td>age</td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>gender</td>
                <td> <input type="radio" name="gender" value="male">male
                     <input type="radio" name="gender" value="female">female
                     <input type="radio" name="gender" value="other">other
                    </td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit" value="submit"></td>
            </tr>

        </table>
    </form>
</body>
</html>

<?php
define('SITEURL','http://localhost/lab3/');
// $conn=new mysqli('localhost','root','','db');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];

    $conn=new mysqli('localhost','root','','db');

    $sql="INSERT INTO form (name,address,phone,age,gender)
    values('$name','$address','$phone','$age','$gender')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location'.SITEURL.'sucess.php');
        
    }
    else{
        die(mysqli_error($conn));
    }
}



?>
