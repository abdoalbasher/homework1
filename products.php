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
            <li><a href="register.php" class="as">register</a></li>
        </ul>
    </div>
    <style>
    .styled-table {
        border-collapse: collapse;
        margin: 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 1100px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: center;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }

    .button1 {

        display: inline-block;
        padding: 12px 22px;
        font-size: 15px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 12px;
        box-shadow: 0 9px #999;
    }
    </style>
    <div id="main">
        <!-- <div class="row">
            <div class="column"> -->
        <div class="continar" style="width:100%;">
            <a style="float:right;background-color: #009879;" class="button1" href="addproducts.php">add</a>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>price</th>
                        <th>quantity</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
         require_once "dbconn.php";
         $conn=new mysqli($lh,$un,$pw,$db);
         
             $select="select * from products";
             $result=$conn->query($select);
             $row=$result->num_rows;
             for($i=0;$i<$row;){
                 $rows=$result->fetch_array(MYSQLI_ASSOC);
        ?>
                    <tr class="active-row">
                        <td><?php echo ++$i;?></td>
                        <td><?php echo $rows['name'];?></td>
                        <td><?php echo $rows['price'];?></td>
                        <td><?php echo $rows['quantity'];?></td>

                    </tr>
                    <?php
             }
        ?>
                </tbody>
            </table>

            <!-- </div>
       

-->

        </div>
    </div>

    <div id="footer">
        <h4>ＣｏｐｙＲｉｇｈｔ_@2022</h4>
    </div>


</body>

</html>