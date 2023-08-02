<?php
// Start or resume the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Clear the authentication token (if used)
// Replace 'your_db_host', 'your_db_username', 'your_db_password', and 'your_db_name' with appropriate values.
$connection = mysqli_connect('your_db_host', 'your_db_username', 'your_db_password', 'your_db_name');

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_SESSION['token'])) {
    $token = $_SESSION['token'];

    // Example query to delete the token from the database (if using token-based authentication)
    // $query = "DELETE FROM tokens WHERE token = '$token'";
    // mysqli_query($connection, $query);
}

// Redirect the user to the login page after logout
header("Location: login.php");
exit();
?>
