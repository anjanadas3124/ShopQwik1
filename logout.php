<?php
session_start();
session_destroy(); // Destroy the session to log out the user

// Redirect to login page after 3 seconds
header("Refresh:3; url=login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging Out...</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .logout-message {
            text-align: center;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="logout-message">
    <h2>You have been logged out.</h2>
    <p>Redirecting to login page in 3 seconds...</p>
    <a href="login.php" class="btn btn-primary">Go to Login</a>
</div>
<?php
    // Include footer
    include 'includes/footer.php';
    ?>

</body>
</html>
