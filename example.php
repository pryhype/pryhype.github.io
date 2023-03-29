<?php
session_start();

// If the user is not logged in, redirect to the login page
if (!isset($_SESSION['logged_in'])) {
    header('Location: /login.php');
    exit();
}

// Include the header file
include('header.php');
?>

<!-- Add your protected content here -->
<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
<p>This is the protected page that only logged-in users can see.</p>

<!-- Include the footer file -->
<?php include('footer.php'); ?>
