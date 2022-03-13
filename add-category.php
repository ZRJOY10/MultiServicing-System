<?php include('repeat/menu.php'); ?>
 
<div class="main">
    
    <div class="box">
        <h1>Add Category</h1>
        <br><br>

        <?php
           if(isset($_SESSION['add']))
           {
               echo $_SESSION['add'];
               unset($_SESSION['add']);
           }
           if(isset($_SESSION['upload']))
           {
               echo $_SESSION['upload'];
               unset($_SESSION['upload']);
           }
           if(isset($_SESSION['update']))
           {
               echo $_SESSION['update'];
               unset($_SESSION['update']);
           }
           if(isset($_SESSION['failed-remove']))
           {
               echo $_SESSION['failed-remove'];
               unset($_SESSION['failed-remove']);
           }

?>

 
 
            <form action="" method="POST" enctype="multipart/form-data">
              <table class="tbl-30">
 
                  <tr>
                  <td>Title: </td>
                  <td>
                      <input type="text" name="title" placeholder = "category Title">
                  </td>
                  </tr>

                  <tr>
                  <td>Type: </td>
                  <td>
                      <input type="text" name="typ" placeholder = "category Type">
                  </td>
                  </tr>
                  <tr>
                          <td>Description: </td>
                          <td>
                              <textarea name="description" cols="30" rows="5" placeholder="Description of the product"></textarea>
                          </td>
                      </tr>
 
                      <tr>
                          <td>Price: </td>
                          <td>
                              <input type="num" name="price">
                          </td>
                      </tr>
                  <tr>
                      <td>Select Image: </td>
                      <td>
                          <input type="file" name ="image">
                      </td>
                    </tr>

 
                  <tr>
                  <td>Active: </td>
                  <td>
                     <input type="radio" name = "active" value="Yes">Yes
                      <input type="radio" name = "active" value="No">No
                  </td>
            
                  </tr>
  
                  <tr>
                      <td colspan="2">
                          <input type="submit" name ="submit" value="Add Category" class ="btn-primary">
                      </td>
                  </tr>
 
              </table>
            </form>

            <?php
            if(isset($_POST['submit']))
            {
                 //$id=$_POST['id'];
                 $title = $_POST['title'];  
                 $typ = $_POST['typ'];
                 $description=$_POST['description'];
                 $price=$_POST['price'];
    
                
                if(isset($_POST['active']))
                {
                    $active = $_POST['active'];
                }
                else
                {
                    $active = "No";
                }
                    
                if(isset($_FILES['image']['name']))
               {
                   //upload the image
                   //to upload image ,we need image name,source path,destination path
                   $image_name = $_FILES['image']['name'];
 
                   //Auto rename our image
                   //get the extension of our image (jpg, png, gift , etc) e.g. "special. food1.png"
                   $ext = end(explode('.',$image_name));
               
                   //rename the image
                   $image_name ="Category_".rand(000,999).'.'.$ext;// e.g. Food_Category_834.jpg
 
                   $source_path = $_FILES['image']['tmp_name'];
                   $destination_path = "../images/category-img/".$image_name;
 
                   //Finally upload the image
                   $upload = move_uploaded_file( $source_path , $destination_path );
 
                   //check whether the image is uploaded or not
                   //And if the image isnot uploaded then we will stop the process and redirect with error message
                   if($upload==false)
                   {
                       //SET message
                       $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
                       //Redirect to add category page
                       header('location:'.'http://localhost/multi_servicing_system/'.'admin/add-category.php');
                       //stop the process
                       die();
                   }
 
               }
               else
               {
                   $image_name = "";
               }


                $title=$_POST['title'];
                $active=$_POST['active'];
                $typ=$_POST['typ'];
                $description=$_POST['description'];
                $price=$_POST['price'];
   
                $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
                $sql="INSERT INTO `category`(`title`, `image_name`,`active`, `typ`,`description`,`price`) VALUES ('$title','". $destination_path."','$active','$typ','$description','$price')";
                $res = mysqli_query($conn,$sql);
                 if($res==true)
                {
                    echo "true";
                    $_SESSION['add'] = "<div class='success'>Category Added Successfully.</div>";
                   header('location:'.'http://localhost/multi_servicing_system/'.'admin/category.php');

                }
                else
                { echo "false";
                    $_SESSION['add'] = "<div class='error'>Failed to add category.</div>";
                   header('location:'.'http://localhost/multi_servicing_system/'.'admin/add-category.php');
                }
           }



            
            
            ?>


 
</div>
</div>