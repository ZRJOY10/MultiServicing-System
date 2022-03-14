<?php include('repeat/menu.php');?>

<div class="main">
<div class="box">
<h1>Manage Order</h1>

     
     <?php

        if(isset($_SESSION['update']))
        {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
     ?><br><br><br>

         <h4>Search by Date and Order Status:</h4>  
            <br>  
            <form action="" method="POST">
            <input type="text" name="date" placeholder = "Date">
            <input type="text" name="status" placeholder = "Status">
            <input type="submit" name ="submit" value="Search">
            </form>  
        <br><br>
        <?php
        
        if(isset($_POST['submit']))
        {
            $date = $_POST['date']; 
            $status=$_POST['status'];
            $sql3="SELECT * FROM `order_product` WHERE order_date LIKE '%$date%' and status LIKE'%$status%' ";
            $res3 = mysqli_query($conn,$sql3);
            $count3=mysqli_num_rows($res3);
            $sn=1;
            $n=0;
            if($count3>0) 
            {
               while($rows=mysqli_fetch_assoc($res3))
               {
                   
                   $id[$n]=$rows['id'];
                   $product[$n]=$rows['product'];
                   $price[$n]=$rows['price'];  
                   $qty[$n]=$rows['quantity'];  
                   $total[$n]=$rows['total'];  
                   $order_date[$n]=$rows['order_date'];  
                   $sstatus[$n]=$rows['status'];  
                   $c_name[$n]=$rows['c_name'];  
                   $c_contact[$n]=$rows['c_contact'];  
                   $c_email[$n]=$rows['c_email'];
                   $c_address[$n]=$rows['c_address'];     
                   $n++; 
                    
               }
           }
           ?>
           <table class="tbl-full">
               <tr>

               <th>S.N</th>
               <th>Product</th>
               <th>Food</th>
               <th>Qty</th>
               <th>Total</th>
               <th>Order Date</th>
               <th>Status</th>
               <th>Customer Name</th>
               <th>Contact</th>
               <th>Email</th>
               <th>Address</th>
               </tr>
               <?php for($i=0;$i<$n;$i++){?>
                <tr>
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo $product[$i]; ?></td>
                        <td><?php echo $price[$i]; ?></td>
                        <td><?php echo $qty[$i]; ?></td>
                        <td><?php echo $total[$i]; ?></td>
                        <td><?php echo $order_date[$i]; ?></td>
                        <td><?php echo $sstatus[$i];?></td>
                        <td><?php echo $c_name[$i]; ?></td>
                        <td><?php echo $c_contact[$i]; ?></td>
                        <td><?php echo $c_email[$i]; ?></td>
                        <td><?php echo $c_address[$i]; ?></td>
                    </tr>
          
                        <?php }?>
                </table>
                <?php
            
        }

            
?>






<br><br>
     <table class="tbl-full">
     <h1>Order Lists:</h1>
         <tr>

         <th>S.N</th>
         <th>Product</th>
         <th>Food</th>
         <th>Qty</th>
         <th>Total</th>
         <th>Order Date</th>
         <th>Status</th>
         <th>Customer Name</th>
         <th>Contact</th>
         <th>Email</th>
         <th>Address</th>
         <th>Actions</th>

         </tr>



         <?php
        $conn=mysqli_connect("localhost","root","","project");
        $sql="SELECT * FROM order_product ORDER BY id DESC";
        $res=mysqli_query($conn,$sql);
        if($res==true)
        {
            $count=mysqli_num_rows($res);
            $sn=1;
            if($count>0)
            {
                while($rows=mysqli_fetch_assoc($res))
                {
                    $id=$rows['id'];
                    $product=$rows['product'];
                    $price=$rows['price'];  
                    $qty=$rows['quantity'];  
                    $total=$rows['total'];  
                    $order_date=$rows['order_date'];  
                    $status=$rows['status'];  
                    $c_name=$rows['c_name'];  
                    $c_contact=$rows['c_contact'];  
                    $c_email=$rows['c_email'];
                    $c_address=$rows['c_address'];  
                    
                    ?>

                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $product; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $qty; ?></td>
                        <td><?php echo $total; ?></td>
                        <td><?php echo $order_date; ?></td>
                        <td>
                        <?php
                        if($status=="Ordered")
                            {
                                echo "<label>$status</label>";
                            }
                        else if($status=="On Delivery")
                        {
                            echo "<label style='color:orange';>$status</label>";
                        }
                        else if($status=="Delivered")
                        {
                            echo "<label style='color:green';>$status</label>";
                        }
                        else if($status=="Cancelled")
                        {
                            echo "<label style='color:red';>$status</label>";
                        }
                       
                        ?>
                         </td>

                        <td><?php echo $c_name; ?></td>
                        <td><?php echo $c_contact; ?></td>
                        <td><?php echo $c_email; ?></td>
                        <td><?php echo $c_address; ?></td>
                        <td>
                        <a href="<?php echo "update-order.php?id=$id;";?>" class="btn-primary">Update category</a>
                        </td>
                    </tr>
                     <?php
                }
            }
        }
?>

     </table>
</div>

</div>