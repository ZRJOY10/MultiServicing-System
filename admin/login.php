
<?php

 include('repeat/connection.php');?>
  

<html>
    <head>
        <title>Login Multi_servicing_system</title>
        <link rel="stylesheet" href="../css/log.css">
    </head>
    <body>
        <div class="login">
            <h1>login</h1>

            <?php

            if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
             if(isset($_SESSION['no-login']))
                    {
                        echo $_SESSION['no-login'];
                        unset($_SESSION['no-login']);
                    }
            ?><br>


            <form action="" class="text-center" method="POST" >
                Username: <br>
                <input type="text" name="username" placeholder="Enter Username">
                <br><br>
                Password : <br>
                <input type="password" name="password" placeholder="Enter Password">
                <br>
                <input type="submit" name="submit" value="Login" class="btn-primary">
            </form>

        </div>
    </body>
</html>


<?php
if(isset($_POST['submit']))
 {
      $username=$_POST['username'];
 
      $password =$_POST['password'];



     $sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";

     $res=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($res);
     if($count==1)
     {
            $_SESSION['login']="Login successfully";
            $_SESSION['user']=$username;
            header("location:".'http://localhost/multi_servicing_system/'.'admin/');
     }
     else{
        $_SESSION['login']="Login Failed";
        header("location:".'http://localhost/multi_servicing_system/'.'admin/login.php' );
     }
 }
?>