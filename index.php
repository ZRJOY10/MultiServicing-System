<?php include('repeat/menu.php'); ?>
    <div class="main">
    <div class="box">
     <h3>DASHBOARD</h3>
<br>
<br>
        <?php

        if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
    ?>
    <br>


     <div class="col-4 text-center">
         <?php
        $conn=mysqli_connect("localhost","root","","project");
        $sql="SELECT * FROM category";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res);

         ?>
         <h1><?php echo $count;?></h1>
         <br>
         Product
     </div>
     <div class="col-4 text-center">
     <?php
        $sql2="SELECT * FROM category WHERE active='Yes' ";
        $res2=mysqli_query($conn,$sql2);
        $count2=mysqli_num_rows($res2);

         ?>
         <h1><?php echo $count2;?></h1>
         <br>
         Available Products
     </div>
     <div class="col-4 text-center">
     <?php
        $sql3="SELECT * FROM order_product";
        $res3=mysqli_query($conn,$sql3);
        $count3=mysqli_num_rows($res3);

         ?>
         <h1><?php echo $count3;?></h1>
         <br>
         Total orders
     </div>
     <div class="col-4 text-center">
     <?php
        $sql4="SELECT SUM(total)  as Total FROM order_product WHERE status='Delivered' ";
        $res4=mysqli_query($conn,$sql4);
        $count4=mysqli_num_rows($res4);
        $row4=mysqli_fetch_assoc($res4);
        $total_revenue=$row4['Total'];

         ?>
         <h1><?php echo $total_revenue;?></h1>
         <br>
         Revenue 
     </div>
     <div class="clearfix"></div>
    </div>
    </div>

</body>
</html>