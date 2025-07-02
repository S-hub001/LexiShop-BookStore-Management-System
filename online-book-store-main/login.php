<?php  
session_start();

# If the admin is logged in
if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>

    <!-- Bootstrap 5 CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Bootstrap 5 Js bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <style>
        /* Background image */
        body {
            background: url('img/background.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        /* Login box styles */
        .login-box {
            background-color: #C9A37B; /* Brown background */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            max-width: 30rem;
            width: 100%;
        }

		/* Logo styling */
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 150px; /* Adjust size as needed */
        }
		
    </style>
</head>
<body>

	<!-- Logo at the top-left -->
    <img src="img/logo.png" alt="LexiShop Logo" class="logo">

	<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
		<form class="login-box" method="POST" action="php/auth.php">
		  <h1 class="text-center display-4.5 pb-3">ADMIN LOGIN</h1>
		  
          <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
			  <?=htmlspecialchars($_GET['error']); ?>
		  </div>
		  <?php } ?>

		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Email address</label>
		    <input type="email" class="form-control" name="email" id="exampleInputEmail1">
		  </div>

		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password</label>
		    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
		  </div>
		  
          <button type="submit" class="btn btn-primary w-100">Login</button>
		   <div class="text-center mt-3">
               <a href="index.php">Store</a>
           </div>
		</form>
	</div>
</body>
</html>

<?php 
}
else
{
  header("Location: admin.php");
  exit;
} ?>
