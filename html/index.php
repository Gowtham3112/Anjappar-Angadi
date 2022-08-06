<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title> Anjappar Angadi </title>
  <link rel="icon" type="image/x-icon" href="../Images/title.jpg">
  
<meta name="viewport" content="width=device-width, initial-scale=1">


   <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 

<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/heading.css">
<link rel="stylesheet" href="../css/footer.css">
</head>
<body>


  <header class="header">

    <div class="header-1">

        <a href="../html/index.php" class="logo"> <img src="../Images/logo.jpeg"> </a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

            <div class="dropdown-4">
              <button class="dropbtn-4">
            <a href="" class="fas fa-user"></a>  
          </button>
          <div class="dropdown-content-4">

            <a  href="../html/Register.php" class="fas fa-user"> Register</a>


        
            <a href="../html/login-2.php" class="	fa fa-user-circle"> Login</a>
          </div>
       
           </div>
    </div>

    <div class="header-2">
        <nav class="navbar">
<u1>
          <div class="dropdown">
          <button class="dropbtn"><a href="../html/Groceries & Vegetables.php">Groceries & Vegetables</a></button>
          <div class="dropdown-content">
            <li><a href="../html/Fresh fruits.php">Fresh Fruits</a></li>
            <li><a href="../html/Fresh Veg.php">Fresh Vegetables</a></li>
            <li><a href="../html/Atta, Flours & Sooji.php">Atta, Flours & Sooji</a></li>
            <li><a href="../html/Dals.php">Dals & Pulses</a></li>
            <li><a href="../html/Oil Product.php">Oil Products</a></li>
            <li><a href="../html/Rice Products.php">Rice Products</a></li>
            <li><a href="../html/Sugar,Jaggery & Salt.php">Sugar,Jaggery & Salt</a></li>
            <li><a href="../html/Masala Powders.php">Masala Powders</a></li>
            <li><a href="../html/Dry fruits, Nuts & Seeds.php">Dry fruits, Nuts & Seeds</a></li>
            <li><a href="../html/Noodles, Pasta & Soups.php">Noodles, Pasta & Soups</a></li>
            <li><a href="../html/Pickles & Chutney.php">Pickles & Chutney</a></li>
            <li><a href="../html/General Groceries.php">General Groceries</a></li>
            <li><a href="../html/Ready To Eat.php">Ready To Eat</a></li>
            <li><a href="../html/Beverages.php">Beverages</a></li>
            <li><a href="../html/Raw Masalas & Spices.php">Raw Masalas & Spices</a></li>
          
          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">
            <a href="../html/Snacks & Beverages.php">Snacks & Beverages</a></button>
            <div class="dropdown-content">
              <li><a href="../html/Brand Snacks.php">Brand Snacks</a></li>
              <li><a href="../html/Water.php">Water</a></li>
             </div>
          </div>


          <div class="dropdown">
          <button class="dropbtn">
            <a href="../Project/html/Meat.php">Meats & Marinates</a></button>
            <div class="dropdown-content">
              <li><a href="../html/Raw Meats.php">Raw Meats</a></li>
              <li><a href="../html/Marinated Meats.php">Marinated Meats</a></li>
              <li><a href="../html/Fresh Water Fish.php">Fresh Water Fish</a></li>
            </div>
          </div>

            <a href="../html/Sea Foods.php">Sea Foods</a>


            <div class="dropdown">
              <button class="dropbtn">
            <a href="../html/Dairy Products.php">Dairy Product</a></button>
            <div class="dropdown-content">
              <li><a href="../html/Aavin.php">Aavin</a></li>
              <li><a href="../html/Ghee All Brands.php">Ghee All Brands</a></li>
              <li><a href="../html/Nandini.php">Nandini</a></li>
            </div>
          </div>

            <a href="# Deals Zone">Deals Zone</a>
            <a href="#Diwali Deals">Diwali Deals</a>
            <a href="#Contact">Contact</a>
        </nav>
    </div>
  </u1>

</header>

<button onclick="topFunction()" id="myBtn" title="Go to top"><img  src="../Images/scroll_top.png"  width="35" height="35">
  
</button>



    <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 4</div>
          <img src="../Images/One-01.jpeg" style="width:100%">
          <div class="text">Vegetables and Fruits</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 4</div>
          <img src="../Images/two.jpg" style="width:100%">
          <div class="text">Sea Foods</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 4</div>
          <img src="../Images/three.jpg" style="width:100%">
          <div class="text">Snacks</div></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">4 / 4</div>
          <img src="../Images/ch.jpg" style="width:100%">
          <div class="text"></div></div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)"></a>
        <a class="next" onclick="plusSlides(1)"></a>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          <span class="dot" onclick="currentSlide(4)"></span> 
        </div>

<div class="welcome">
  <center>
  <font size="3" color="red"> <h1> Welcome to our online grocery, meat & supermarket store</h1> </font>
  <hr>
 <font size="2.5" <p>Anjappar Angadi is one of the prominent online grocery store in India Chennai, offering a wide range of grocery and other consumer products. Shop all groceries, sweets & snacks, fresh meats & fish, rice & dals, flours & rava, masalas & Indian spices, ready to cool & eat, pickles, pastes & sauces, tea & coffee and health & beauty. Our online products are all quality tested to provide top class products to our customers.</p> </font>
  </center>
</div>

<div class="column1">
  <div class="card1">
    <h3 style="color:rgb(223, 16, 16);">Groceries & Vegetables</h3>
    
  </div>
</div>

<div class="column1">
  <div class="card1" >
    <h3 style="color:rgb(223, 16, 16);">Fresh Fruits</h3>
    
  </div>
</div>

<div class="column1">
  <div class="card1">
    <h3 style="color:rgb(223, 16, 16);">Fresh Vegetables</h3>
    
  </div>
</div>


<div class="row">
  <div class="column">
    <div class="card">
        <img border="0" alt="W3Schools" src="../Images/oil.jpeg" width="390" height="250">
    </div>
  </div>

  <div class="column">
    <div class="card">
        <img border="0" alt="W3Schools" src="../Images/Fruit.jpeg" width="390" height="250">
    </div>
  </div>
  
  
  
  <div class="column">
    <div class="card">
        <img border="0" alt="W3Schools" src="../Images/veg.jpeg" width="390" height="250">
    </div>
  </div>
</div>

<div class="column1">
  <div class="card1">
    <h3 style="color:rgb(223, 16, 16);">Snacks & Beverages</h3>
    
  </div>
</div>

<div class="column1">
  <div class="card1" >
    <h3 style="color:rgb(223, 16, 16);">Meat & Marinates</h3>
    
  </div>
</div>

<div class="column1">
  <div class="card1">
    <h3 style="color:rgb(223, 16, 16);">Sea Foods</h3>
    
  </div>
</div>


<div class="row">
  <div class="column">
    <div class="card">
        <img border="0" alt="W3Schools" src="../Images/snacks.jpeg" width="390" height="250">
    </div>
  </div>

  <div class="column">
    <div class="card">
        <img border="0" alt="W3Schools" src="../Images/AM.jpeg" width="390" height="250">
    </div>
  </div>
  
  
  
  <div class="column">
    <div class="card">
        <img border="0" alt="W3Schools" src="../Images/fish.jpeg" width="390" height="250">
    </div>
  </div>
</div>

<div class="column1">
  <div class="card1">
    <h3 style="color:rgb(223, 16, 16);">Deal Zone</h3>
    
  </div>
</div>

<div class="column1">
  <div class="card1" >
    <h3 style="color:rgb(223, 16, 16);">Diwali Deals</h3>
    
  </div>
</div>

<div class="column1">
  <div class="card1">
    <h3 style="color:rgb(223, 16, 16);">Offers</h3>
    
  </div>
</div>


<div class="row">
  <div class="column">
    <div class="card">
        <img border="0" alt="W3Schools" src="../Images/offers.jpeg" width="390" height="250">
    </div>
  </div>

  <div class="column">
    <div class="card">
        <img border="0" alt="W3Schools" src="../Images/Diwali Offers.jpeg" width="390" height="250">
    </div>
  </div>
  
  
  
  <div class="column">
    <div class="card">
        <img border="0" alt="W3Schools" src="../Images/Spl Off.jpg" width="390" height="250">
    </div>
  </div>
</div>



<!-- footer section starts  -->

<section class="footer">

  <div class="box-container">
      <div class="box">
          <h1>Information</h1>
          <a href="#" class="links"> Sitemap  </a>
          <a href="#" class="links"> Shipping & Delivery </a>
          <a href="#" class="links"> Promo Codes Terms & Use </a>
          <a href="#" class="links">Exchange, Returns & Refund</a>
          <a href="#" class="links"> Privacy Policy  </a>
          <a href="#" class="links">  Conditions of Use </a>
          <a href="#" class="links"> About us </a>
          <a href="#" class="links"> Contact us </a>
         
      </div>

      <div class="box">
        <h1>Customer service </h1>
        <a href="#" class="links">   Search</a>
        <a href="#" class="links">  News </a>
        <a href="#" class="links"> Blog </a>
        <a href="#" class="links">  Recently viewed products</a>
        <a href="#" class="links"> Compare products list</a>
         <a href="#" class="links">New products </a> 
         <a href="#" class="links">Cancellation by Site / Customer </a>
    </div>

      <div class="box">
          <h1>My account </h1>
          <a href="#" class="links">  My account </a>
          <a href="#" class="links">  OrdeMy accounts </a>
          <a href="#" class="links"> Addresses </a>
          <a href="#" class="links">Shopping cart  </a>
          <a href="#" class="links">  Wishlist </a>
         
      </div>
      
      <div class="box">
          
          <div class="box">
              <img src="../Images/title.jpg" alt="Flowers in Chania">
                <p>newsletter</p>
              <p>subscribe for latest updates</p>
              <input type="email" placeholder="Enter your mail" class="email">
              <input type="submit" value="subscribe" class="btn">
          </div>
          
          
      </div>
      

  </div>

  <div class="credit"> iconao systems  | all rights reserved </div>

</section>

<!-- footer section ends -->



</body>
<script src="../js/index.js"></script>
</html> 