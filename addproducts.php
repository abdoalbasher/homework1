<?php
session_start();
$id=$_SESSION['id'];
if(!$_SESSION['username']){
    header("location: login.php");
}
    require_once "dbconn.php";
    $conn=new mysqli($lh,$un,$pw,$db);
    $select="select * from useres where id='$id' and role=1";
    $result=$conn->query($select);
    $row=$result->num_rows;
   
?>
<!DOCTYPE html>
<html>

<Head>
    <title>
        Abd Alrahem ALbasher
    </title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="Main.css" />
    <link rel="stylesheet" type="text/css" href="fonts/material-icons/MaterialIcons-Regular.ttf">
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free/fa-brands-400.woff">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</Head>

<body>
    <div id="header">
        <img src="Home.jpg" alt="There Was Pic Here :{" id="headerimg">
    </div>
    <div id="nav">

        <ul>

            <li style="float:left;"><a class="as">username:<?php echo $_SESSION['username']; ?></a></li>
            <li style="float:left;"><a href="logout.php" class="as">logout</a></li>
            <li style="float:left;"><a href="update_profile.php" class="as">Update Profile</a></li>
            <li><a href="Home.php" class="as">Home</a></li>
            <li><a href="About us.php" class="as">About us </a></li>
            <li><a href=" contact us.php " class="as">contact us </a></li>
            <li><a href="Price.php " class="as">Price</a></li>
            <li><a href="login.php" class="as">login</a></li>
            <li><a href="cartshop.php" class="as">shop</a></li>
            <?php
            if($row==1){
                ?>
            <li><a href="products.php" class="as">mangment products</a></li>
            <?php
            }
            ?>

            <li><a href="category.php" class="material-symbols-outlined" data-toggle="tooltip" style="color:white;"><i
                        class="material-icons">&#xe8cc;</i></a></li>

        </ul>

    </div>
    <div id="sidbar">
        <ul style="text-align: center ;">
            <li><a href="Home.php" class="as">Home </a></li>
            <li><a href="About us.php" class="as">About us</a></li>
            <li><a href="contact us.php " class="as">contact us </a></li>
            <li><a href="Price.php " class="as">Price</a></li>
            <li><a href="login.php" class="as">login</a></li>
            <li><a href="login.php" class="as">login</a></li>
            <li><a href="register.php" class="as">register</a></li>

        </ul>
    </div>
    <style>
    .form-control,
    .control-label {
        width: 500px;
        margin: 30px 18pc;
    }
    </style>
    <div id="main">
        <div class="container">
            <h2 style="text-align:center;"> إضافة اصناف</h2>
            <form action="addproducts.php" method="POST" class=" form-horizontal">
                <div class="form-group">
                    <label class="control-label" for="email">name:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="email" placeholder="Enter name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">price:</label>
                    <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" id="pwd" placeholder="Enter price">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="pwd">quantity:</label>
                    <div class="col-sm-10">
                        <input type="number" name="quantity" class="form-control" id="pwd" placeholder="Enter quantity">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input style="margin-left: 720px;" name="add" type="submit" class="btn btn-default"
                            value="إضافة صنف">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="footer">

    </div>
    <div id="footerHome">
        <h4>ＣｏｐｙＲｉｇｈｔ_＠２０２２</h4>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
</script>

</html>

<?php

require_once "dbconn.php";

$conn=new mysqli($lh,$un,$pw,$db);
if($conn->connect_error){
    echo "connection fail";
}
if(isset($_POST['add'])){
$name=$_POST['name'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$insert="insert into products(name,price,quantity)values('$name','$price','$quantity')";
$result=$conn->query($insert);
echo '<script>
window.location.href = "products.php";
</script>';
}
?>