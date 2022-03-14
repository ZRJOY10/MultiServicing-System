<?php include('repeat/menu.php');?>

<div class="main">
    <div class="box">
        <h1>Update Order</h1>
        <br><br><br>


        <?php

            if(isset($_GET['id']))
            {
                $conn=mysqli_connect("localhost","root","","project");
                $id=$_GET['id'];
                $sql="SELECT * FROM order_product WHERE id=$id";
                $res=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($res);
                 if($count==1)
                 {
                    $rows=mysqli_fetch_assoc($res);
                     $product=$rows['product'];
                     $price=$rows['price'];
                     $qty=$rows['quantity'];
                     $status=$rows['status'];
                     $c_email=$rows['c_email'];
                 }

            }

?>



     <form action="" method="POST">
         <table class="tbl-30">
             <tr>
                 <td>Product Name</td>
                 <td><b><?php echo $product;?></b></td>
             </tr>
             <tr>
                 <td>Price</td>
                 <td><b> $ <?php echo $price;?></b></td>
             </tr>
             <tr>
                 <td>Qty</td>
                 <td><input type="number" name="qty" value="<?php echo $qty;?>"></td>
             </tr>
             <tr>
                 <td>Status</td>
                 <td>
                     <select name="status">
                         <option <?php if($status=="Ordered"){echo "selected";}?> value="Ordered">Ordered</option>
                         <option <?php if($status=="On Delivery"){echo "selected";}?> value="On Delivery">On Delivery</option>
                         <option <?php if($status=="Delivered"){echo "selected";}?> value="Delivered">Delivered</option>
                         <option <?php if($status=="Cancelled"){echo "selected";}?> value="Cancelled">Cancelled</option>
                         
                     </select>
                 </td>
             </tr>
             <tr>
                 <td clospan="2">
                 <input type="hidden" name="price" value="<?php echo $price;?>">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input type="submit" name="submit" value="Update Order" class="btn-primary">
                       
                 </td>
             </tr>
         </table>
     </form>



     <?php
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    $total=$price* $qty;
    $status=$_POST['status'];


    $to_email = $c_email;
    $subject = "Delivery Report:";
    $body ="Dear Customer,Your product is ". $status .'.Stay tuned with us.Thank You';
    $headers = "From: multiservicingsystem@gmail.com";

    if (mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email...";
    } else {
        echo "Email sending failed...";
    }

    
    $conn=mysqli_connect("localhost","root","","project");
    $sql2="UPDATE order_product SET
    quantity='$qty',total='$total',status='$status' where id='$id' ";
    $res2=mysqli_query($conn,$sql2);
    if($res2==true)
    {
        $_SESSION['update']="<div class='success'>Order Updated Successfully.</div>";
        header('location:'.'http://localhost/multi_servicing_system/'.'admin/order.php');
    }
}

?>


    </div>
</div>