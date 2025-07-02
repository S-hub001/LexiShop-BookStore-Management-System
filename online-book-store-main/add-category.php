<?php  
session_start();

# If the admin is logged in
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) 
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Category</title>

    <!-- Bootstrap 5 CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #C9A37B; /* Light Brown */
        }
        .navbar {
            background-color: rgb(93, 54, 29) !important; /* Dark Brown */
        }
        .navbar a {
            color: white !important;
        }
        .form-container {
            background-color: white; /* White Form */
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 50rem;
        }
        .btn-orange {
            background-color: #FFA500;
            border: none;
            color: white;
        }
        .btn-orange:hover {
            background-color: #e69500;
        }
    </style>

</head>
<body>

	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="admin.php">Admin</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item"><a class="nav-link" href="index.php">Store</a></li>
		        <li class="nav-item"><a class="nav-link" href="add-book.php">Add Book</a></li>
		        <li class="nav-item"><a class="nav-link active" href="add-category.php">Add Category</a></li>
		        <li class="nav-item"><a class="nav-link" href="add-author.php">Add Author</a></li>
		        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

        <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <form action="php/add-category.php" method="post" class="form-container">
                <h1 class="text-center pb-3">Add New Category</h1>

                <?php if (isset($_GET['error'])) { ?>
                  <div class="alert alert-danger"><?=htmlspecialchars($_GET['error']); ?></div>
                <?php } ?>
                <?php if (isset($_GET['success'])) { ?>
                  <div class="alert alert-success"><?=htmlspecialchars($_GET['success']); ?></div>
                <?php } ?>

                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input type="text" class="form-control" name="category_name">
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-orange">Add Category</button>
                </div>
            </form>
        </div>
	</div>

</body>
</html>

<?php }else{
  header("Location: login.php");
  exit;
} ?>
