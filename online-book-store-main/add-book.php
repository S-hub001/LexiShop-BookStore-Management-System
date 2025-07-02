<?php  
session_start();

# If the admin is logged in
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {

	# Database Connection File
	include "db_conn.php";

    # Category helper function
	include "php/func-category.php";
    $categories = get_all_categories($conn);

    # author helper function
	include "php/func-author.php";
    $authors = get_all_author($conn);

    if (isset($_GET['title'])) {
    	$title = $_GET['title'];
    }else $title = '';

    if (isset($_GET['desc'])) {
    	$desc = $_GET['desc'];
    }else $desc = '';

    if (isset($_GET['category_id'])) {
    	$category_id = $_GET['category_id'];
    }else $category_id = 0;

    if (isset($_GET['author_id'])) {
    	$author_id = $_GET['author_id'];
    }else $author_id = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Book</title>

    <!-- bootstrap 5 CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

	<style>
		body {
			background-color: #C9A37B ; /* Light brown */
		}
		.navbar {
			background-color: rgb(93, 54, 29) !important; /* Dark brown */
		}
		.navbar a {
			color: white !important;
		}
		.form-container {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
		}
		form {
			background-color: white;
			color: black;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
			width: 90%;
			max-width: 50rem;
			margin: auto;
		}
		.btn-primary {
			background-color: darkorange !important;
			border: none !important;
			color: white !important;
			font-weight: bold;
			padding: 10px 20px;
			border-radius: 5px;
			transition: background-color 0.3s ease;
			display: block;
			margin: 0 auto;
		}
		.btn-primary:hover {
			background-color: orangered !important;
		}
	</style>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="admin.php">ADMIN</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item"><a class="nav-link" href="index.php">Store</a></li>
	        <li class="nav-item"><a class="nav-link active" href="add-book.php">Add Book</a></li>
	        <li class="nav-item"><a class="nav-link" href="add-category.php">Add Category</a></li>
	        <li class="nav-item"><a class="nav-link" href="add-author.php">Add Author</a></li>
	        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="form-container">
     <form action="php/add-book.php" method="post" enctype="multipart/form-data" class="shadow p-4 rounded">
     	<h1 class="text-center pb-3">Add New Book</h1>
     	<?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
			  <?=htmlspecialchars($_GET['error']); ?>
		  </div>
		<?php } ?>
		<?php if (isset($_GET['success'])) { ?>
          <div class="alert alert-success" role="alert">
			  <?=htmlspecialchars($_GET['success']); ?>
		  </div>
		<?php } ?>
     	<div class="mb-3">
		    <label class="form-label">Book Title</label>
		    <input type="text" class="form-control" value="<?=$title?>" name="book_title">
		</div>
		<div class="mb-3">
		    <label class="form-label">Book Description</label>
		    <input type="text" class="form-control" value="<?=$desc?>" name="book_description">
		</div>
		<div class="mb-3">
		    <label class="form-label">Book Author</label>
		    <select name="book_author" class="form-control">
		    	<option value="0">Select author</option>
		    	<?php foreach ($authors as $author) { ?>
		    	<option value="<?=$author['id']?>" <?= ($author_id == $author['id']) ? 'selected' : '' ?>><?=$author['name']?></option>
		    	<?php } ?>
		    </select>
		</div>
		<div class="mb-3">
		    <label class="form-label">Book Category</label>
		    <select name="book_category" class="form-control">
		    	<option value="0">Select category</option>
		    	<?php foreach ($categories as $category) { ?>
		    	<option value="<?=$category['id']?>" <?= ($category_id == $category['id']) ? 'selected' : '' ?>><?=$category['name']?></option>
		    	<?php } ?>
		    </select>
		</div>
		<div class="mb-3">
		    <label class="form-label">Book Cover</label>
		    <input type="file" class="form-control" name="book_cover">
		</div>
		<div class="mb-3">
		    <label class="form-label">File</label>
		    <input type="file" class="form-control" name="file">
		</div>
		<button type="submit" class="btn btn-primary">Add Book</button>
     </form>
	</div>
</div>
</body>
</html>

<?php }
else {
  header("Location: login.php");
  exit;
} ?>