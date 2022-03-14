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
        <img src="../images2/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#gro">grocery</a>
        <a href="#fastfoods">fastfoods</a>
        <a href="#books">books</a>
        <a href="#medicine">medicine</a>
        <a href="#electronics">electronics</a>
        <a href="#review">review</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="../images2/cart-item-1.png" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="../images2/cart-item-2.png" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="../images2/cart-item-3.png" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="../images2/cart-item-4.png" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>1st header will be there</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat labore, sint cupiditate distinctio tempora reiciendis.</p>
        <a href="#" class="btn">get yours now</a>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
            <a href="#" class="btn">learn more</a>
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
                                        <img class="im" src="<?php echo $image_name;?>" alt="">
                                        <h3><?php echo $title;?></h3>
                                        <p><?php echo $description;?></p>
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
                                        <p><?php echo $description;?></p>
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
                                        <p><?php echo $description;?></p>
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
                                        <p><?php echo $description;?></p>
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
                                        <p><?php echo $description;?></p>
                                        <div class="price"><?php echo $price;?>tk</div>
                                        <button class="btn"> <a href="<?php echo 'http://localhost/multi_servicing_system/'?>admin/order_product.php?product_id=<?php echo $id ?> " target="_blank">Buy now</a></button>     
                                    </div>
                                 
                                 <?php
                    }
                }
                ?>
</div>
</section>



<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> Hot <span>Deals</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../images2\rice.jpg" alt="">
            </div>
            <div class="content">
                <h3>Rice</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">50 tk per kg<span>75tk</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../images2\pasta.jpg" alt="">
            </div>
            <div class="content">
                <h3>Naga Pasta</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">250 tk <span>325tk</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="../images2/product-3.png" alt="">
            </div>
            <div class="content">
                <h3>fresh coffee</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">400 tk <span>520tk</span></div>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="../images2/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="../images2/pic-1.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="../images2/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="../images2/pic-2.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="../images2/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="../images2/pic-3.png" class="user" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number">
            </div>
            <input type="submit" value="contact now" class="btn">
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
        <img src="../images2/logo.png" alt="">
    </a>
</div>
    <div class="credit">created by <span>MultiServicing System Team</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="../js/script.js"></script>

</body>
</html>