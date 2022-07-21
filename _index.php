<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--Header section start-->
    <div class="header-1">
        <a href="<?php include("portfolio.php ") ?>" class="logo"><i class="fas fa-shopping-basket"></i>Saim Mart</a>
        <form action="" class="search-box-container" method="POST">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </div>

    <div class="header-2">
        <div id="menu-bar" class="fas fa-bars"></div>


        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#category">category</a>
            <a href="#product">product</a>
            <a href="#deal">deal</a>
            <a href="#contact">contact</a>
        </nav>
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-heart"></a>
            <a href="<?php include("signup.php") ?>" class="fas fa-user-circle"></a>
        </div>
    </div>

</body>

</header>
<!--Header section End http://source.unsplash.com/1400x400/?code-->



<!--Home section start-->
<section class="home" id="home">
    <div class="image">
        <img src="img/1.jpg" alt="">
    </div>

    <div class="content">
        <span>fresh and organic</span>
        <h3>your daily need products</h3>
        <a href="#" class="btn">get started</a>
    </div>


</section>
<!--Home section End-->


<!--Banner section start-->
<section class="banner-container">
    <div class="banner">
        <img src="img/2.jpg" alt="">
        <div class="content">
            <h3>special offer</h3>
            <p>upto 40% off</p>
            <a href="#" class="btn">check out</a>
        </div>
    </div>

    <div class="banner">
        <img src="img/3.jpg" alt="">
        <div class="content">
            <h3>Limited offer</h3>
            <p>upto 50% off</p>
            <a href="#" class="btn">check out</a>
        </div>
    </div>
</section>
<!--Banner section end-->

<!--catagory section start-->
<section class="category" id="category">
    <h1 class="heading">shop by <span>category</span></h1>
    <div class="box-container">
        <div class="box">
            <h3>vegitables</h3>
            <p>upto 50% off</p>
            <img src="img/4.jpg" alt="">
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="box">
            <h3>juice</h3>
            <p>upto 30% off</p>
            <img src="img/5.jpg" alt="">
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="box">
            <h3>meat</h3>
            <p>upto 20% off</p>
            <img src="img/6.jpg" alt="">
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="box">
            <h3>fruite</h3>
            <p>upto 15% off</p>
            <img src="img/7.jpg" alt="">
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
</section>
<!--catagory section end-->

<!-- product section starts  -->

<section class="product" id="product">

    <h1 class="heading">latest <span>products</span></h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-33%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="img/8.jpg" alt="">
            <h3>organic banana</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-45%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="img/9.jpg" alt="">
            <h3>organic tomato</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-52%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="img/10.jpg" alt="">
            <h3>organic orange</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-13%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="img/11.jpg" alt="">
            <h3>natural mild</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="img/12.jpg" alt="">
            <h3>organic grapes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-29%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="img/13.webp" alt="">
            <h3>natural almonts</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-55%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="img/14.jpg" alt="">
            <h3>organic apple</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-30%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="img/15.webp" alt="">
            <h3>natural butter</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <span class="discount">-40%</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <img src="img/16.jpg" alt="">
            <h3>organic carrot</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price"> $10.50 <span> $13.20 </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="1000" value="1">
                <span> /kg </span>
            </div>
            <a href="#" class="btn">add to cart</a>
        </div>

    </div>

</section>

<!-- product section ends -->

<!-- Deal section start-->

<section class="deal" id="deal">

    <div class="content">

        <h3 class="title">Deal Of The Day</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, molestiae sed et iste veritatis autem
            architecto tempora. Suscipit laborum necessitatibus ut pariatur, ullam sunt expedita nostrum harum dolor,
            iure tenetur!</p>

        <div class="count-down">
            <div class="box">
                <h3 id="day">00</h3>
                <span>Day</span>
            </div>
            <div class="box">
                <h3 id="hour">00</h3>
                <span>hour</span>
            </div>
            <div class="box">
                <h3 id="minute">00</h3>
                <span>minute</span>
            </div>
            <div class="box">
                <h3 id="second">00</h3>
                <span>second</span>
            </div>
        </div>

        <a href="#" class="btn">check the deal</a>
    </div>
</section>
<!-- Deal section ends -->


<!--contact section start -->
<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span>us</h1>

    <form action="">
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>
        <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">


    </form>
</section>
<!--contact section ends -->



<!--newsletter section start -->
<section class="newsletter">
    <h3>Subscribe us for latest update</h3>

    <form action="">
        <input class="box" type="email" placeholder="enter your email">
        <input type="submit" value="subscribe" class="btn">
    </form>


</section>
<!--newsletter section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>groco</a>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam culpa sit enim nesciunt rerum laborum
                illum quam error ut alias!</p>
            <div class="share">
                <a href="#" class="btn fab fa-facebook-f"></a>
                <a href="#" class="btn fab fa-twitter"></a>
                <a href="#" class="btn fab fa-instagram"></a>
                <a href="#" class="btn fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>our location</h3>
            <div class="links">
                <a href="#">Lahore</a>
                <a href="#">Fasialabad</a>
                <a href="#">Multan</a>
                <a href="#">Karachi</a>
                <a href="#">HaroonAbad</a>
            </div>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <div class="links">
                <a href="#">home</a>
                <a href="#">category</a>
                <a href="#">product</a>
                <a href="#">deal</a>
                <a href="#">contact</a>
            </div>
        </div>

        <div class="box">
            <h3>download app</h3>
            <div class="links">
                <a href="#">google play</a>
                <a href="#">window xp</a>
                <a href="#">app store</a>
            </div>
        </div>

    </div>

    <h1 class="credit"> created by <span>M SAIM TAHIR</span> | all rights reserved! </h1>

</section>

<!-- footer section ends -->




















<!--custom js file links-->
<script src="script.js"></script>
</body>

</html>