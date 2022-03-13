<?php include('repeat/menu.php'); ?>

<div class="main">
<div class="box">
<h1>Add Admin</h1>
<br><br>
<form action="" method="POST">
<table class="tbl-30">
    <tr>
        <td>Id</td>
        <td><input type="number" name="id" placeholder="enter your id"  required></td>
    </tr>
<tr>
    <td>Fullname:</td>
    <td><input type="text" name="full_name"
    placeholder="enter your name"  required></td>
</tr>
<tr>
    <td>Username:</td>
    <td>
        <input type="text" name="username" placeholder="enter your username"  required >
    </td>
    </tr>
    <tr>
        <td>Password</td>
        <td>
            <input type="password" name="password" placeholder="give password" required>

        </td>
    </tr>
<tr>
    
    <td colspan="2">
        <input type="submit" name="submit" value="Add Admin"
        class="btn-primary">
    </td>
</tr>
</table>
</form>

</div>
</div>

<?php
if(isset($_POST['submit']))
{
      $id=$_POST['id'];
      $full_name=$_POST['full_name'];
      $username=$_POST['username'];
      $password=$_POST['password'];

      $sql="INSERT INTO admin values ('$id','$full_name', '$username','$password')"; 
      echo $sql;

    $conn=mysqli_connect("localhost","root","") or die(mysqli_error());
    $data=mysqli_select_db($conn,'project') or die(mysqli_error());
    $res=mysqli_query($conn, $sql);

    if($res)
    {
      $_SESSION['add']="Admin added successfully";
      header("location:".'http://localhost/multi_servicing_system/'.'admin/admin1.php');
    }
    //else echo "not";

}


?>