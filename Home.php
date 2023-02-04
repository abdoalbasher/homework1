<?php
session_start();
if(!$_SESSION['username']){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<Head>
    <title>
        Abd Alrahem ALbasher 
    </title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Main.css" /> 
    <link rel="stylesheet" type="text/css" href="fonts/material-icons/MaterialIcons-Regular.ttf"> 
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free/fa-brands-400.woff"> 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</Head>
<body>
    <div id="header">
        <img src="Home.jpg" alt="There Was Pic Here :{" id="headerimg">
    </div>
    <div id="nav">
              
        <ul >

          <li style="float:left;"><a  class="as">username:<?php echo $_SESSION['username']; ?></a></li>
          <li style="float:left;"><a href="logout.php" class="as">logout</a></li>
          <li style="float:left;"><a href="update_profile.php" class="as">Update Profile</a></li>
          <li><a href="Home.php" class="as">Home</a></li>
          <li><a href="About us.php" class="as">About us               </a></li>
          <li><a href=" contact us.php " class="as">contact us             </a></li>
          <li><a href="Price.php " class="as">Price</a></li>
          <li><a href="login.php" class="as">login</a></li>
          <li><a href="register.php" class="as">register</a></li>
          <li><a href ="category.php" class ="material-symbols-outlined"data-toggle="tooltip" style="color:white;"><i class="material-icons">&#xe8cc;</i></a></li>
           
        </ul>

    </div>
    <div id="sidbar">
        <ul style="text-align: center ;">
            <li><a href="Home.php" class="as">Home  </a></li>
            <li><a href="About us.php" class="as">About us</a></li>
            <li><a href="contact us.php "class="as">contact us </a></li>
            <li><a href="Price.php " class="as">Price</a></li>
            <li><a href="login.php" class="as">login</a></li>
            <li><a href="login.php" class="as">login</a></li>
          <li><a href="register.php" class="as">register</a></li>
          
        </ul>
    </div>
    <div id="main">
        <center>
            <h1 style="padding-top: 130px;"> CHIKE GELATO</h1>
        </center>
    </div>
    <div id="footer">

    </div>
    <div id="footerHome">
        <h4>ＣｏｐｙＲｉｇｈｔ_＠２０２２</h4>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>