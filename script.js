// search functionality

document.addEventListener("DOMContentLoaded", () => {
  const searchInput = document.getElementById("searchInput");
  const products = document.querySelectorAll(".productInfo"); // Select all product info containers

  searchInput.addEventListener("input", function () {
    const searchTerm = searchInput.value.toLowerCase(); // Get the search term and convert to lowercase

    products.forEach((product) => {
      const productName = product
        .querySelector(".productname")
        .textContent.toLowerCase(); // Get the product name

      // Check if the product name includes the search term
      if (productName.includes(searchTerm)) {
        product.parentElement.style.display = ""; // Show the product
      } else {
        product.parentElement.style.display = "none"; // Hide the product
      }
    });
  });
});

// Cart functionality
let cartCount = 0;
const addToCartButtons = document.querySelectorAll(".add-to-cart");

addToCartButtons.forEach((button) => {
  button.addEventListener("click", function () {
    cartCount++;
    document.getElementById("cartCount").textContent = cartCount;
    alert("Item added to cart!");
  });
});

// Get the modal
const modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// Show the modal when the page loads
window.onload = function () {
  modal.style.display = "block";
};

//Catalogue Dropdown

document.addEventListener("DOMContentLoaded", function () {
  const catalogueLinks = document.querySelectorAll(".catalogue-link");
  const products = document.querySelectorAll("#product-list .column");

  catalogueLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault(); // Prevent default link behavior
      const category = this.getAttribute("data-category");

      // Show all products if "all" is selected
      products.forEach((product) => {
        if (
          category === "all" ||
          product.getAttribute("data-category") === category
        ) {
          product.style.display = "block"; // Show product
        } else {
          product.style.display = "none"; // Hide product
        }
      });
    });
  });
});
