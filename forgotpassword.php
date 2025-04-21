<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$email = $_POST["email"] ?? null; // Use null coalescing operator to avoid undefined index notice
if ($email) {
    $token = bin2hex(random_bytes(16));
    $token_hash = hash("sha256", $token);
    $expiry = date("Y-m-d H:i:s", time() + 60 * 30);

    $mysqli = require __DIR__ .  "/config.php";

    if (!($mysqli instanceof mysqli)) {
        die('Failed to connect to MySQL: ' . var_export($mysqli, true));
    }

    $sql = "UPDATE users SET reset_token_hash = ?, reset_token_expires_at = ? WHERE email = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($mysqli->error));
    }

    $stmt->bind_param("sss", $token_hash, $expiry, $email);
    if (!$stmt->execute()) {
        die('Execute failed: ' . htmlspecialchars($stmt->error));
    }

    if ($stmt->affected_rows === 0) {
        echo "No user found with that email address.";
    } else {
        echo "Password reset token has been generated and stored.";
    }

    $stmt->close();
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset | BuyNAJProducts / Vintage Shirts</title>
    <link rel="stylesheet" href="forgotpassword.css" />
</head>
<body>
    <div class="container">
        <div class="topnav">
            <div class="search-container">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search" />
            </div>
            <a href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
            <a href="Signup.php" target="_blank"><i class="fas fa-user-plus"></i> Create account</a>
            <a href="Login.php" target="_blank"><i class="fas fa-sign-in-alt"></i> Log In</a>
        </div>

        <div class="logo">
            <img src="naj logo.jpg" alt="NAJ Logo" />
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
<form action="forgotpassword.php" method="post">
    <div class="reset_container">
        <h1>Reset Password</h1>
        <p>We will send you an email to reset your password</p>
        <div class="input_container">
            <label for="email-Input">
                <input type="email" id="email-Input" name="email" placeholder="Email" required />
            </label>
        </div>
        <div>
            <button class="emailsubmit" type="submit">Submit</button>
        </div>
        <div>
            <a href="Login.php">Cancel</a>
        </div>
    </div>
</form>
</body>
</html>