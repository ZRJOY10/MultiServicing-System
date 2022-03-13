<?php include('repeat/menu.php');?>

<div class="main">
<div class="box">
<h1>Manage Category</h1>
<br><br><br>

<?php
           if(isset($_SESSION['add']))
           {
               echo $_SESSION['add'];
               unset($_SESSION['add']);
           }
           if(isset($_SESSION['remove']))
           {
            echo $_SESSION['remove'];
            unset($_SESSION['remove']);
           }
           if(isset($_SESSION['delete']))
           {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
           }
           
        ?>
<br><br>








 
        <h4>Search by category:</h4>  
            <br>  
            <form action="" method="POST">
            <input type="text" name="title" placeholder = "Search Category">
            <input type="submit" name ="submit" value="Search">
            </form>  
       <br><br>

    
       <h4>Search by price:</h4>
        <br>
        <form action="" method="POST">
            <input type="number" name="price1" placeholder="lower limit">
            <input type="number" name="price2" placeholder="upper limit">
            <input type="submit" name ="submit1" value="Search">
        </form>

        
 


        <?php
        
        if(isset($_POST['submit1']))
        {
            $price1 = $_POST['price1'];  
            $price2=$_POST['price2'];
            $sql3="SELECT * FROM category where price>='$price1' and price<='$price2' order by price";
            $res3 = mysqli_query($conn,$sql3);
            $count3=mysqli_num_rows($res3);
            $sn=1;
            $n=0;
            if($count3>0)
             {
                while($row=mysqli_fetch_assoc($res3))
                {
                    $image_name[$n]=$row['image_name'];
                    $active[$n]=$row['active'];
                    $typ[$n]=$row['typ'];
                    $title[$n]=$row['title'];           
                    $price[$n]=$row['price'];
                    $description[$n]=$row['description'];     
                    $n++; 
                     
                }
            }
            ?>
            <table class="tbl-full">
                <tr>

                    <th>S.N</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                </tr>
                <?php for($i=0;$i<$n;$i++){?>
                <tr>
                            <td><?php echo $i+1?></td>
                            <td><?php echo $title[$i]?></td>
                            <td>
                                <?php echo $typ[$i]?>
                            </td>
                            <td>
                                <?php echo $price[$i]?>

                            </td>
                            <td>
                                <?php echo  $description[$i]?>
                            </td>
                            <td>
                                
                                <?php
                                    if($image_name!="")
                                    {
                                        ?>
                                        <img src="<?php echo $image_name[$i]?>" width="100px">
                                     <?php
                                    }?>
                            </td>
                        </tr>
                        <?php }?>
                </table>
                <?php
            
        }

            
?>

 
 
 
 
 
 
 
 
 
 
 
 <?php
        
        if(isset($_POST['submit']))
        {
            $key = $_POST['title'];  
            $sql2="SELECT * FROM category where typ='$key' ";
            $res2 = mysqli_query($conn,$sql2);
            $count2=mysqli_num_rows($res2);
            $sn=1;
            $n=0;
            if($count2>0)
             {
                while($row=mysqli_fetch_assoc($res2))
                {
                    $image_name[$n]=$row['image_name'];
                    $active[$n]=$row['active'];
                    $typ[$n]=$row['typ'];
                    $title[$n]=$row['title'];           
                    $price[$n]=$row['price'];
                    $description[$n]=$row['description'];     
                    $n++; 
                     
                }
            }
            ?>
            <table class="tbl-full">
                <tr>

                    <th>S.N</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                </tr>
                <?php for($i=0;$i<$n;$i++){?>
                <tr>
                            <td><?php echo $i+1?></td>
                            <td><?php echo $title[$i]?></td>
                            <td>
                                <?php echo $typ[$i]?>
                            </td>
                            <td>
                                <?php echo $price[$i]?>

                            </td>
                            <td>
                                <?php echo  $description[$i]?>
                            </td>
                            <td>
                                
                                <?php
                                    if($image_name!="")
                                    {
                                        ?>
                                        <img src="<?php echo $image_name[$i]?>" width="100px">
                                     <?php
                                    }?>
                            </td>
                        </tr>
                        <?php }?>
                </table>
                <?php
            
        }

            
?>









           <br><br><br>
     <a href="<?php echo 'http://localhost/multi_servicing_system/'?>admin/add-category.php" class="btn-primary">Add Category</a>

     <table class="tbl-full">
         <tr>

         <th>S.N</th>
         <th>Title</th>
         <th>Type</th>
         <th>Price</th>
         <th>Description</th>
         <th>Image</th>
         <th>Active</th>
         <th>Actions</th>
         </tr>


         <?php
         $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
            $sql="SELECT * FROM category";
            $res = mysqli_query($conn,$sql);
            $count=mysqli_num_rows($res);
            $sn=1;
            if($count>0) {
                while($row=mysqli_fetch_assoc($res))
                {
                    $id=$row['id'];
                    $image_name=$row['image_name'];
                    $active=$row['active'];
                    $typ=$row['typ'];
                    $title=$row['title'];           
                    $price=$row['price'];
                    $description=$row['description'];

                    ?>
                        <tr>
                            <td><?php echo $sn++?></td>
                            <td><?php echo $title?></td>
                            <td>
                                <?php echo $typ?>
                            </td>
                            <td>
                                <?php echo $price?>

                            </td>
                            <td>
                                <?php echo  $description?>
                            </td>
                            <td>
                                
                                <?php
                                    if($image_name!="")
                                    {
                                        ?>
                                        <img src="<?php echo $image_name?>" width="100px">
                                     
                                          <?php

                                    } 
                                    else{
                                        echo "div class='error'>Image not Added</div>";
                                    }
                                ?>
                        
                         </td>
                            <td><?php echo $active?></td>
                            <td>
                                    <a href="<?php echo 'http://localhost/multi_servicing_system/';?>admin/update-category.php?id=<?php echo $id?>&image_name=<?php echo $image_name;?>" class="btn-primary">Update category</a>
                                    <a href="<?php echo 'http://localhost/multi_servicing_system/';?>admin/delete-category.php?id=<?php echo $id?>&image_name=<?php echo $image_name;?>" class="btn-primary">Delete category</a>
                            </td>
                        </tr>
                    <?php
                }
            }
            else{

                ?>
                <tr>
                    <td colspan="6"><div class="error">No category added</div></td>
                </tr>
                <?php
            }
            
?>

     </table>
</div>
</div>