<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Cart - BuyNAJProducts</title>
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
          <input type="text" id="searchInput" placeholder="Search" />
        </div>
        <a href="cart.php" id="cartLink"
          ><i class="fas fa-shopping-cart"></i> Cart
          <span class="cart-count" id="cartCount">0</span></a
        >
        <a href="Signup.php"
          ><i class="fas fa-user-plus" target="_blank"></i> Create account</a
        >
        <a href="Login.php"
          ><i class="fas fa-sign-in-alt" target="_blank"></i> Log In</a
        >
      </div>
      &nbsp;
      <div class="Logo">
        <img src="naj logo.jpg" />
      </div>

      <h1>Your Shopping Cart</h1>

      <div class="cart-items">
        <!-- Check if the cart is empty -->
        <div id="emptyCartMessage" class="empty-cart">
          <h2>Your cart is currently empty.</h2>
          <p>Add items to your cart to see them here.</p>
          <a href="index.php" class="continue-shopping">Continue Shopping</a>
        </div>
        <!-- Uncomment the following block to simulate items in the cart -->
        <!--
            <div class="cart-item">
                <img src="vintage shirt 3.jfif" alt="BPY Vintage Shirt" />
                <div class="item-details">
                    <h2>BPY Vintage Shirt</h2>
                    <p class="productPrice">&#8358;15,000</p>
                    <button class="remove-from-cart">Remove</button>
                </div>
            </div>
            <div class="cart-item">
                <img src="green baseballcap.png" alt="Baseball Cap 1" />
                <div class="item-details">
                    <h2>Baseball Cap 1</h2>
                    <p class="productPrice">&#8358;5,000</p>
                    <button class="remove-from-cart">Remove</button>
                </div>
            </div>
            -->
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
            <a href="#" aria-label="Facebook"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a href="#" aria-label="WhatsApp"
              ><i class="fab fa-whatsapp"></i
            ></a>
            <a href="#" aria-label="Instagram"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
        <div class="footer-bottom">
          <p>
            &copy; 2024 NAJCreativeHub. All rights reserved. Designed by
            @JovitaAnya
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
