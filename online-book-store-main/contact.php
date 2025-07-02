<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact Us - LexiShop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: rgb(224, 200, 176);
    }
    .navbar {
      background-color: rgb(93, 54, 29);
    }
    .navbar a {
      color: white !important;
    }
    .form-container {
      background-color: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .form-title {
      color: #5D361D;
    }
    .btn-custom {
      background-color: #5D361D;
      color: white;
    }

    .back-btn {
            background-color: #8B5E3C;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            margin-top: 20px;
        }
        .back-btn:hover {
            background-color: #6B402E;
        }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">LexiShop</a>
  </div>
</nav>

<!-- Back Button -->
<div class="container mt-5">
    <a href="index.php" class="back-btn">Back to Store</a>
</div>

<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-8 form-container">
      <h2 class="form-title mb-4">Contact <span class="highlight">LexiShop</span></h2>
      <form method="post" action="#">
        <div class="mb-3">
          <label for="name" class="form-label">Your Name</label>
          <input type="text" class="form-control" id="name" placeholder="Jane Doe">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Your Email</label>
          <input type="email" class="form-control" id="email" placeholder="jane@example.com">
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Your Message</label>
          <textarea class="form-control" id="message" rows="5" placeholder="Write your query, suggestion or praise here..."></textarea>
        </div>
        <button type="submit" class="btn btn-custom">Send Message</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>
