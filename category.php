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
    <img src="Home.jpg" alt="There Was Pic Here :{" width="100%" height="350px">
    </div>

    <div id="nav">
        
        <ul >
            <li style="float:left;"><a  class="as">username:<?php echo $_SESSION['username']; ?></a></li>
          <li style="float:left;"><a href="logout.php" class="as">logout</a></li>
          <li style="float:left;"><a href="update_profile.php" class="as">Update Profile</a></li>
          <li><a href="Home.html" class="as">Home</a></li>
          <li><a href="About us.html" class="as">About us               </a></li>
          <li><a href=" contact us.html " class="as">contact us             </a></li>
          <li><a href="Price.html " class="as">Price</a></li>
          <li><a href="login.html" class="as">login</a></li>
          <li><a href="register.html" class="as">register</a></li>
          <li><a href ="category.html" class ="material-symbols-outlined"data-toggle="tooltip" style="color:white;"><i class="material-icons">&#xe8cc;</i></a></li>

        </ul>

    </div>
    <div id="sidbar">
        <ul style="text-align: center ;">
            <li><a href="Home.html" class="as">Home  </a></li>
            <li><a href="About us.html" class="as">About us</a></li>
            <li><a href="contact us.html "class="as">contact us </a></li>
            <li><a href="Price.html " class="as">Price</a></li>
            <li><a href="login.html" class="as">login</a></li>
          <li><a href="register.html" class="as">register</a></li>
        </ul>
    </div>

    <div id="main">
        <div class="row">
           
        <div class="column ">
            <center>
                <h2>سلة الزبون</h2>
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col ">#</th>
                            <th scope="col ">Item</th>
                            <th scope="col ">Price</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row ">#</th>
                            <td>Frozen Bars</td>
                            <td>13LYD</td>
                        </tr>
                        <tr>
                            <th scope="row ">#</th>
                            <td>Chocolate Éclair Bar</td>
                            <td>10LYD</td>
                        </tr>
                        <tr>
                            <th scope="row ">#</th>
                            <td>Cream Tube Sugar Cane Paper</td>
                            <td>2LYD</td>
                        </tr>
                        <tr>
                            <th scope="row ">#</th>
                            <td>ice-kreeb</td>
                            <td>7LYD</td>
                        </tr>
                    </tbody>
                </table>
            </center>
            <div class="b1 ">
                <a class="button" href="buy.html" >دفع</a>
                <label style="margin-right: 50px;">الخصم</label>
                <input name ="name" value=" " class="input">
            </div>
        </div>
      

       

    </div>
    
</div>

<div id="footer">
    <h4>ＣｏｐｙＲｉｇｈｔ_@2022</h4>
</div>


</body>

</html>