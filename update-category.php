<?php include('repeat/menu.php');?>
 
<div class="main">
    <div class="box">
 
        <h1>Update Category</h1>
        <br><br>
 
        <?php
          
          if(isset($_GET['id']))
          {
            $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
             $id = $_GET['id'];
             $sql = "SELECT * FROM category where id=$id";
 
             $res = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($res);
 
             if($count==1)
             {
                 $row = mysqli_fetch_assoc($res);
                 $title = $row['title'];
                 $current_image = $row['image_name'];
                 $active = $row['active'];
                 $typ=$row['typ'];
             }
             else
             {
                 $_SESSION['no-category-found'] = "<div class='error'>Category not found.</div>";
                 header('location:category.php');
 
             }
          }
          else
          {
               header('location:category.php');
 
          }
        ?>
 
     <form action="" method="POST" enctype="multipart/form-data">
     <table class="tbl-30">
          <tr>
              <td>Title</td>
              <td>
                  <input type="text" name="title" value="<?php echo $title; ?>">
              </td>
          </tr>
  <tr>
                  <td>Type: </td>
                  <td>
                      <input type="text" name="typ"  value="<?php echo $typ; ?>">
                  </td>
                  </tr>
          <tr>
              <td>Current Image</td>
              <td>
                  <?php
                      if($current_image != "")
                      {
                          ?>
                          <img src="<?php echo $current_image; ?>" width="150px">
                          <?php
                      }
                  ?>
              </td>
          </tr>
 
          <tr>
              <td>New Image</td>
              <td>
                  <input type="file" name="image">
              </td>
          </tr>
 
 
           <tr>
               <td>Active: </td>
               <td>
                  <input <?php if($active=="Yes"){echo  "checked";} ?> type="radio" name="active" value="Yes">Yes
                  <input <?php if($active=="No"){echo "checked";} ?> type="radio" name="active" value="No">No
                   
               </td>
           </tr>
 
           <tr>
               <td>
                   <input type="hidden" name="image" value= "<?php echo $current_image; ?>" >
                   <input type="hidden" name="id" value= "<?php echo $id; ?>" >
               <input type="submit" name="submit" value="Update Category" class="btn-primary">
 
               </td>
           </tr>
       
     </table>
     </form>
             
       <?php
          if(isset($_POST['submit']))
          {
              $id = $_POST['id'];
              $title = $_POST['title'];
              $featured = $_POST['featured'];
              $active = $_POST['active'];
              $typ=$_POST['typ'];
             
 
              if(isset($_FILES['image']['name']))
              {
                  $image_name = $_FILES['image']['name'];
 
                if($image_name != "")
                {
                   
                     $ext = end(explode('.',$image_name));
               
                   
                   $image_name ="Category_".rand(000,999).'.'.$ext;
 
                   $source_path = $_FILES['image']['tmp_name'];
                   $destination_path = "../images/category-img/".$image_name;
 
                   
                   $upload = move_uploaded_file( $source_path , $destination_path );
 
                   
                   if($upload==false)
                   {
                       
                       $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
                       
                       header('location:category.php');
            
                       die();
                   }                    
 
                 
                }
                else
                {
                    $image_name = $current_image;
                }
              }
              else
              {
                  $image_name = $current_image;
              }
            
 
             
              $sql2 = "UPDATE category SET
                 title = '$title',
                 image_name='$destination_path',
                 active = '$active',
                 typ='$typ' 
                 where id = $id
              ";
 
               
               $res2 = mysqli_query($conn,$sql2);
 
 
               if($res2==true)
               {
                   $_SESSION['update'] = "<div class = 'success'> Category Updated Successfully.</div>";
                   header('location:category.php');
               }
               else
               {
                   $_SESSION['update'] = "<div class = 'error'> Failed tp  Update Category.</div>";
                   header('location:category.php');
               }
          }
       ?>
 
    </div>
</div>