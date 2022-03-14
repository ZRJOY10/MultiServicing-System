<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiServicing System</title>
>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href="../css/style2.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="../images2/logo1.png" alt="">

    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#gro">grocery</a>
        <a href="#fastfoods">fastfoods</a>
        <a href="#books">books</a>
        <a href="#medicine">medicine</a>
        <a href="#electronics">electronics</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

   
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>All for one &<br> one for all</h3>
        <p>People spend money when and where they feel good. </p>
        
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="../images2\veg.jpg" alt="">
        </div>

        <div class="content">
            <h3>what makes us special?</h3>
            <p> We always try to provide fresh and best products to your door on time.Our most unhappy customers are our greatest source of learning.We learn,execute,fail and relearn.</p>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="gro">

    <h1 class="heading"> <span>Grocery</span> </h1>
    <div class="box-container">
    <?php
     $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
     $sql="SELECT * FROM category where typ='grocery' and active='Yes' ";
     $res=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($res);
     if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name=$row['image_name'];
                        $description=$row['description'];
                        $price=$row['price'];
                        ?>
                                

                                    <div class="box">
                                        <img src="<?php echo $image_name;?>" alt="">
                                        <h3><?php echo $title;?></h3>
                                        <h1><?php echo $description;?></h1>
                                        <div class="price"><?php echo $price;?>tk/kg</div>
                                        <button class="btn"> <a href="<?php echo 'http://localhost/multi_servicing_system/'?>admin/order_product.php?product_id=<?php echo $id ?> " target="_blank">Buy now</a></button>     
                                    </div>
                                 
                                 <?php
                    }
                }
                ?>
</div>

</section>


<section class="menu" id="fastfoods">

<h1 class="heading"> <span>Fastfoods</span> </h1>
    <div class="box-container">
    <?php
     $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
     $sql="SELECT * FROM category where typ='food' and active='Yes' ";
     $res=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($res);
     if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name=$row['image_name'];
                        $description=$row['description'];
                        $price=$row['price'];
                        ?>
                                

                                    <div class="box">
                                        <img src="<?php echo $image_name;?>" alt="">
                                        <h3><?php echo $title;?></h3>
                                        <h1><?php echo $description;?></h1>
                                        <div class="price"><?php echo $price;?>tk</div>
                                        <button class="btn"> <a href="<?php echo 'http://localhost/multi_servicing_system/'?>admin/order_product.php?product_id=<?php echo $id ?> " target="_blank">Buy now</a></button>     
                                    </div>
                                 
                                 <?php
                    }
                }
                ?>
</div>


</section>


<section class="menu" id="books">

<h1 class="heading"> <span>Book</span> </h1>
    <div class="box-container">
    <?php
     $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
     $sql="SELECT * FROM category where typ='book' and active='Yes' ";
     $res=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($res);
     if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name=$row['image_name'];
                        $description=$row['description'];
                        $price=$row['price'];
                        ?>
                                

                                    <div class="box">
                                        <img src="<?php echo $image_name;?>" alt="">
                                        <h3><?php echo $title;?></h3>
                                        <h1><?php echo $description;?></h1>
                                        <div class="price"><?php echo $price;?>tk</div>
                                        <button class="btn"> <a href="<?php echo 'http://localhost/multi_servicing_system/'?>admin/order_product.php?product_id=<?php echo $id ?> " target="_blank">Buy now</a></button>     
                                    </div>
                                 
                                 <?php
                    }
                }
                ?>
</div>


</section>


<section class="menu" id="medicine">
<h1 class="heading"> <span>Medicine</span> </h1>
<div class="box-container">
    <?php
     $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
     $sql="SELECT * FROM category where typ='medicine' and active='Yes' ";
     $res=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($res);
     if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name=$row['image_name'];
                        $description=$row['description'];
                        $price=$row['price'];
                        ?>
                                

                                    <div class="box">
                                        <img src="<?php echo $image_name;?>" alt="">
                                        <h3><?php echo $title;?></h3>
                                        <h1><?php echo $description;?></h1>
                                        <div class="price"><?php echo $price;?>tk</div>
                                        <button class="btn"> <a href="<?php echo 'http://localhost/multi_servicing_system/'?>admin/order_product.php?product_id=<?php echo $id ?> " target="_blank">Buy now</a></button>     
                                    </div>
                                 
                                 <?php
                    }
                }
                ?>
</div>
</section>


<section class="menu" id="electronics">
<h1 class="heading"> <span>Electronics</span> </h1>
<div class="box-container">
    <?php
     $conn=mysqli_connect("localhost","root","","project") or die(mysqli_error());
     $sql="SELECT * FROM category where typ='electronics' and active='Yes' ";
     $res=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($res);
     if($count>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $image_name=$row['image_name'];
                        $description=$row['description'];
                        $price=$row['price'];
                        ?>
                                

                                    <div class="box">
                                        <img src="<?php echo $image_name;?>" alt="">
                                        <h3><?php echo $title;?></h3>
                                        <h1><?php echo $description;?></h1>
                                        <div class="price"><?php echo $price;?>tk</div>
                                        <button class="btn"> <a href="<?php echo 'http://localhost/multi_servicing_system/'?>admin/order_product.php?product_id=<?php echo $id ?> " target="_blank">Buy now</a></button>     
                                    </div>
                                 
                                 <?php
                    }
                }
                ?>
</div>
</section>




<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

    <iframe class="map" src="https://maps.google.com/maps?q=jahangirnagar%20university,Savar%20Union%201342,%20Bangladesh&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>
        <form action="">
            <h3>get in touch</h3>
            
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <span>multiservicingsystem@gmail.com</span>
                
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <span >01841210803</span>
                <br>
                <span class="fas fa-phone"></span>
                <span>01889693671</span>
            </div>
        </form>

    </div>

</section>

<!-- contact section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>


    <div><a href="#" class="logo1">
        <img src="../images2/logo1.png" alt="">
    </a>
</div>
    <div class="credit">created by <span>MultiServicing System Team</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>