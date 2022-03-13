<?php
   
   include('repeat/connection.php');
   if(isset($_GET['id']) AND isset($_GET['image_name']))
   {
       $id = $_GET['id'];
       $image_name = $_GET['image_name'];
       if($image_name != "")
       {
           $path =$image_name;
           $remove = unlink($path);
           if($remove==false)
           {
               
               $_SESSION['remove'] = "<div class='error'>Failed to remove category image.</div>";
         
               header('location:'.'http://localhost/multi_servicing_system/'.'admin/category.php');
           
               die();
           }
       }
       $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
      
        $sql = "DELETE FROM category WHERE id = $id";

        $res = mysqli_query($conn,$sql);
        if($res==true)
        {
            $_SESSION['delete'] = "<div class='success'>Category Deleted Successfully</div>";
          
            header('location:'.'http://localhost/multi_servicing_system/'.'admin/category.php');
        }
        else
        {
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Category</div>";
           
            header('location:'.'http://localhost/multi_servicing_system/'.'admin/category.php');
        }

   }
   else
   {
       header('location:'.'http://localhost/multi_servicing_system/'.'admin/category.php');
   }
?>
