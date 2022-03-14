<?php include('repeat/menu.php');?>
    </div>
    <div class="main">
    <div class="box">
     <h2>ADMINS</h2>
     <br><br><br>
     <a href="add-admin.php" class="btn-primary">Add Admin</a>
     <br><br>
     <?php
     if(isset($_SESSION['add']))
     {
         echo $_SESSION['add'];
         unset($_SESSION['add']);
     }
     ?>
    
     <br><br><br>
     <table class="tbl-full">
         <tr>

         <th>ID</th>
         <th>Full Name</th>
         <th>UserName</th>
         </tr>


         
     <?php
        $conn=mysqli_connect("localhost","root","");
        $sql="select id,full_name,username from project.admin";
        $res=mysqli_query($conn,$sql);
        if($res==true)
        {
            $count=mysqli_num_rows($res);
            if($count>0)
            {
                while($rows=mysqli_fetch_assoc($res))
                {
                    $id=$rows['id'];
                    $full_name=$rows['full_name'];
                    $username=$rows['username'];  
                    
                    ?>

                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $full_name; ?></td>
                        <td><?php echo $username; ?></td>
                    </tr>
                     <?php
                }
            }
        }
?>




     </table>



    </div>
    </div>

</body>
</html>