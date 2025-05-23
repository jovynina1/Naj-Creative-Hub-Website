<!--<?php
session_start();
?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BuyNAJProducts/VintageShirts/UnisexTshirts/Caps</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <script src="script.js" defer></script>
  
  </head>
  <body>
    <div class="container">
      <div class="topnav">
        <div class="search-container">
          <i class="fas fa-search"></i>
          <input type="text" id="searchInput" placeholder="Search for products" />
        </div>

        <a href="cart.html" id="cartLink"
          ><i class="fas fa-shopping-cart"></i> Cart
          <span class="cart-count" id="cartCount">0</span></a
        >
        <a href="signup.html"
          ><i class="fas fa-user-plus" target="_blank"></i> Create account</a
        >
        <a href="login.html"
          ><i class="fas fa-sign-in-alt" target="_blank"></i> Log In</a
        >
      </div>
      &nbsp;
      <div class="logo">
        <img src="naj logo.jpg" />
      </div>
      <div class="secondnav">
        <a href="#" target="_blank">HOME</a>
        <div class="dropdown">
          <a href="#" class="dropbtn">CATALOGUE</a>
          <div class="dropdown-content">
            <a href="#">Vintage Shirts</a>
            <a href="#">Unisex T-Shirts</a>
            <a href="#">Plain T-Shirts</a>
            <a href="#">Caps</a>
          </div>
        </div>
        <a href="#">NEW COLLECTIONS</a>
        <a href="#">VINTAGE SHIRTS</a>
        <a href="#">UNISEX STOCK T-SHIRTS</a>
        <a href="#">PLAIN T-SHIRTS</a>
      </div>

      <div class="wrapper">
        <div class="image">
          <img src="Hoodie-removebg-preview.png" />
        </div>
        <div class="text"><h1>MAKE STATEMENTS WITH NAJ COLLECTIONS</h1></div>
      </div>

      <div class="row">
        <div class="column">
          <img src="vintage shirt 3.jfif" />
          <div class="productInfo">
            <h2 class="productname">BPY Vintage Shirt</h2>
            <p class="productPrice">&#8358;15,000</p>
            <button class="add-to-cart">Add to Cart</button>
          </div>
        </div>

        <div class="column">
          <img src="vintage shirt11.jfif" />
          <div class="productInfo">
            <h2 class="productname">BG Vintage Shirt</h2>
            <p class="productPrice">&#8358;15,000</p>
            <button class="add-to-cart">Add to Cart</button>
          </div>
        </div>

        <div class="column">
          <img src="vintage shirt10.jfif" />
          <div class="productInfo">
            <h2 class="productname">BRY Vintage Shirt</h2>
            <p class="productPrice">&#8358;15,000</p>
            <button class="add-to-cart">Add to Cart</button>
          </div>
        </div>
      </div>

      <div class="Tshirtwrapper">
        <div class="Tshirt" alt="Tshirts in hanger">
          <img src="unisex tshirts.png" class="Tmoving-image"/>
          <div class="TeeText">
            <h1 class="text1">T-SHIRTS</h1>
            <p class="text2">
              Our Tshirts comes in different sizes and beautiful designs
            </p>
            <h1 class="text3">SHOP NOW</h1>
          </div>
        </div>
      </div>

      <div class="baseballcaps">
        <div class="cap">
          <img src="green baseballcap.png" alt="Baseball Cap 1" />
          <h2>Baseball Cap 1</h2>
          <p>&#8358;5,000</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="cap">
          <img src="blue cap.png" alt="Baseball Cap 2" />
          <h2>Baseball Cap 2</h2>
          <p>&#8358;5,000</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="cap">
          <img src="baseball caps.png" alt="Baseball Cap 3" />
          <h2>Baseball Cap 3</h2>
          <p>&#8358;6,000</p>
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="Joggerswrapper">
        <div class="Joggers" alt="Joggers in hanger">
          <img src="joggers-removebg-preview.png" class="moving-image"/>
          </div>
          <div class="JText">
            <h1 class="Jtext1">JOGGERS</h1>
            <p class="Jtext2">
              Our Joggers are available in different sizes and colors
            </p>
            <button  class="Jtext3">SHOP NOW</button>
          </div>
        </div>

      <!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <h2>Newsletter</h2>
          <p>Sign up for the latest news, offers and styles</p>
          <label></label><div class="inputbox">
            <input
              type="text"
              name="email"
              id="email-input"
              placeholder="Email"
            />
          </div>
        </label>
          <button id="modalActionBtn">SUBSCRIBE</button>
        </div>
      </div>
      <div class="footer">
        <div class="footer-content">
          <p>Having issues placing an order? Call us/WhatsApp on 08138921556</p>
          <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Contact Us</a>
          </div>
          <div class="social-media">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2024 NAJCreativeHub. All rights reserved. Designed by @JovitaAnya</p>
        </div>
    </div>
  </body>
</html>
