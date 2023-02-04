<?php
session_start();
if(!$_SESSION['username']){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<Head>
    <link rel="stylesheet" type="text/css" href="Main.css" /> 
    <link rel="stylesheet" type="text/css" href="fonts/material-icons/MaterialIcons-Regular.ttf"> 
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free/fa-brands-400.woff"> 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>
        Abd Alrahem ALbasher
    </title>
</Head>

<body>
    <div id="header">
        <img src="Home.jpg" alt="There Was Pic Here :{">
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
          <li><a href="register.php" class="as">register</a></li>
        </ul>
    </div>
    <div id="main">
    <center>
        <h3 style="margin-top: 50px ;">Employees</h3>
        <ul style="list-style-type:none ; margin-top: 30px;">
            <li>qasem shalaby</li>
            <li>haitem smeda</li>
            <li>aldawy anzam</li>
            <li>randa alsaqer</li>
            <li>belqes alyafrny</li>
        </ul>
        
    </center>
    </div>
    
    <div id="footer">
        <h4 >ＣｏｐｙＲｉｇｈｔ_＠２０２２</h4>
    </div>

</body>



</html>