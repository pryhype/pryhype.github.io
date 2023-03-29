<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['Admin'];
    $password = $_POST['123'];

    // TODO: Validate the credentials against your database
    // For example, you might use a query like this:
    // $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    // $result = mysqli_query($connection, $query);
    // if (mysqli_num_rows($result) === 1) {
    if ($username === 'example' && $password === 'password') {
        $_SESSION['logged_in'] = true;
        header('Location: /example');
        exit();
    } else {
        $error = 'Invalid username or password.';
    }
}

// Include the header file
include('header.php');
?>

<h1>Login</h1>
<?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>
<form method="post">
    <label>Username</label>
    <input type="text" name="username" required>
    <br>
    <label>Password</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit">Log in</button>
</form>

<!-- Include the footer file -->
<?php include('footer.php'); ?>
