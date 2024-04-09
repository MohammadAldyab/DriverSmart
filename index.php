<?php
require_once("views/head/head.php");
?>
<?php
// Start de sessie
session_start();

// Check if the user is not logged in (user ID is not set)
if (!isset($_SESSION['email'])) {
    // Automatically redirect the user to the login page
    header("Location: /DriverSmart/views/loginsysteem/login.php");
    // Stop further execution of the code 
    exit;
}


?>