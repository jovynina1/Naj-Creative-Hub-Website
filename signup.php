<?php
include 'config.php'; // Include the database connection

// Initialize error and success messages
$errorMessage = '';
$successMessage = '';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])) {
    // Handle signup
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $password = $_POST['password']; // Raw password input

    // Validate inputs
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
        $errorMessage = "Error: All fields are required.";
    } else {
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Check if the email already exists
        $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $errorMessage = "Error: Email already exists. Please use a different email.";
        } else {
            // Prepare and bind for inserting new user
            $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

            // Execute the statement
            if ($stmt->execute()) {
                // Set success message
                $successMessage = "Account created successfully! You can now log in.";
                // Redirect to the login page after a short delay
                header("Location: Login.php");
                exit();
            } else {
                $errorMessage = "Error: " . $stmt->error;
            }
        }
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup|BuyNAJProducts/VintageShirts</title>
    <link rel="stylesheet" href="signup.css" />
  </head>
  <body>
    <div class="container">
      <div class="topnav">
        <div class="search-container">
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Search" />
        </div>
        <a href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>
        <a href="signup.php"
          ><i class="fas fa-user-plus" target="_blank"></i> Create account</a
        >
        <a href="login.php"
          ><i class="fas fa-sign-in-alt" target="_blank"></i> Log In</a
        >
      </div>
      &nbsp;
      <div class="logo">
        <img src="naj logo.jpg" />
      </div>
      <div class="secondnav">
        <a href="#">HOME</a>
        <a href="#">CATALOGUE</a>
        <a href="#">NEW COLLECTIONS</a>
        <a href="#">VINTAGE SHIRTS</a>
        <a href="#">UNISEX STOCK T-SHIRTS</a>
        <a href="#">PLAIN T-SHIRTS</a>
      </div>
    </div>
        <h1>Create Account</h1>
        <div class="form-wrapper">
            <form action="signup.php" method="post" id="signupForm">
                <label class="input-label">
                    <input type="text" name="firstName" id="firstname-input" placeholder="First Name" required />
                </label>
                <label class="input-label">
                    <input type="text" name="lastName" id="lastname-input" placeholder="Last Name" required />
                </label>
                <label class="input-label">
                    <input type="email" name="email" id="email-input" placeholder="Email" required />
                </label>
                <label class="input-label">
                    <input type="password" name="password" id="password-input" placeholder="Password" required />
                </label>
                <button type="submit" name="create" id="submit">Create</button>
            </form>
        </div>
    </div>
</body>
</html>