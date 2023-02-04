<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-icons/MaterialIcons-Regular.ttf"> 
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free/fa-brands-400.woff"> 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="login.php" method="POST">
                <input type="text" name="username" placeholder="username" required />
                <input type="password" name="password" placeholder="password" required />
                <?php
                session_start();
                    require_once "dbconn.php";
                    $conn=new mysqli($lh,$un,$pw,$db);
                    if(isset($_POST['login'])){
                        $user=$_POST['username'];
                        $pass=$_POST['password'];
                        $select="select * from useres where name='$user' and password='$pass'";
                        $result=$conn->query($select);//ارسال الى قاعدة البيانات ويستقبل في متغير الريزولت
                        $rows=$result->fetch_array(MYSQLI_ASSOC);
                        if($result->num_rows==1){
                            $_SESSION['username']=$user;
                            $_SESSION['id']=$rows['id'];
                            header("location: home.php");
                        }
                        else {
                            echo "اسم المستخدم او كلمة السر غير صحيحة";
                        }
                    }
                ?>
                <button type="submit" name="login">Login</button>
                <p class="message">لا تملك حساب? <a href="register.php">انشاء حساب جديد</a></p>
            </form>
        </div>
    </div>
</body>

</html>