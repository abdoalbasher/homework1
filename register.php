<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-icons/MaterialIcons-Regular.ttf"> 
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free/fa-brands-400.woff"> 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="login-page">
        <h1 style="text-align:center; color: lavenderblush;">Sign Up</h1>
        <div class="form">
            <form class="login-form" action="register.php" method="POST">
                <input type="text" name="username" placeholder="username" required />
                <input type="email" name="email" placeholder="email" required />
                <input type="password" name="password" placeholder="password" required />
                <input type="password" name="confirm_password" placeholder="Confirm password" required />
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
    $confirm_password=$_POST['confirm_password'];
    $select="select * from useres where email='$email'";
    $result=$conn->query($select);//ارسال الى قاعدة البيانات ويستقبل في متغير الريزولت
    if($result->num_rows==1){
        echo "المستخدم موجود بلفعل";
    }
    else{
        if($password!=$confirm_password){
            echo "كلمة السر غير متطابقة";
        }
        else{
            $insert="insert into useres(name,email,password)values('$username','$email','$password')";
            
            $res=$conn->query($insert);
            header("location: login.php");
        }
    }
}
?>
                <button type="submit" name="sign">Sign Up</button>
                <p class="message">Login? <a href="login.php">لديك حساب بلفعل</a></p>

            </form>
        </div>
    </div>
</body>

</html>

