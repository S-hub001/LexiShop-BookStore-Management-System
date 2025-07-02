<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart Confirmation</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Styles -->
    <style>
        body {
            background-color: rgb(224, 200, 176); /* Light brown */
        }
        .navbar {
            background-color: rgb(93, 54, 29) !important; /* Dark brown */
        }
        .navbar a {
            color: white !important;
        }
        .card-custom {
            background-color: #8B5E3C !important;
            color: white;
        }
        .btn-custom {
            background-color: #5D361D;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">LexiShop</a>
        </div>
    </nav>

    <!-- Confirmation Message -->
    <div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
        <div class="text-center card p-5 card-custom">
            <img src="img/check.png" width="80" alt="checkmark">
            <h3 class="mt-3">Book has been added to your cart!</h3>
            <p>What would you like to do next?</p>
            <div class="mt-4">
                <a href="index.php" class="btn btn-custom me-2">Continue Shopping</a>
                <a href="#" class="btn btn-success">Proceed with Payment</a>
            </div>
        </div>
    </div>
</body>
</html>
