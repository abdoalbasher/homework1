<?php
require_once "dbconn.php";
session_start();
if(!$_SESSION['username']){
    header("location: login.php");
}
$id=$_SESSION['id'];
$conn=new mysqli($lh,$un,$pw,$db);
if($conn->connect_error){
    echo "connection fail";
}

$select="select * from useres where id='$id'";
$result=$conn->query($select);
$rows=$result->fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Profile</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-icons/MaterialIcons-Regular.ttf"> 
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free/fa-brands-400.woff"> 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="login-page">
        <h1 style="text-align:center; color: lavenderblush;">Update Profile</h1>
        <div class="form">
            <form class="login-form" action="update_profile.php" method="POST">
                <input type="text" name="username" value="<?php echo $rows['name'];?>" placeholder="username" required />
                <input type="email" name="email"  value="<?php echo $rows['email'];?>" placeholder="email" required />
                <input type="password" name="password"  value="<?php echo $rows['password'];?>" placeholder="password" required />
                <?php
require_once "dbconn.php";

$conn=new mysqli($lh,$un,$pw,$db);
if($conn->connect_error){
    echo "connection fail";
}

if(isset($_POST['sign'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

        $update="update useres set name='$username',email='$email',password='$password' where id=$id";
        $res=$conn->query($update);
        echo "تم التعديل البيانات";
}
?>
                <button type="submit" name="sign">Update</button>
                <h4><a style="color:white;    text-decoration: none;" href="home.php">الرئيسي</a></h4>

            </form>
        </div>
    </div>
</body>

</html>

