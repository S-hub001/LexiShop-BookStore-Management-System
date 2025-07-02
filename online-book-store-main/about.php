<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Infinity Coders</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <style>
        body {
            background-color: rgb(224, 200, 176);
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: rgb(93, 54, 29) !important;
        }
        .navbar a {
            color: white !important;
        }
        .team-member {
            background-color: #8B5E3C;
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .team-member img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
        }
        .team-member h3 {
            font-size: 1.5rem;
            margin-top: 10px;
        }
        .team-member p {
            font-size: 1rem;
            margin-top: 10px;
        }
        .team-member a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        .team-header {
            text-align: center;
            margin-top: 20px;
            font-size: 2rem;
            color: #8B5E3C;
        }
        .team-header img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-top: 10px;
        }
        .content {
            padding: 30px;
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

<!-- Navbar -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Store</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>  
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
            <?php if (isset($_SESSION['user_id'])) {?>
                <a class="nav-link" href="admin.php">Admin</a>
            <?php } else { ?>
                <a class="nav-link" href="login.php">Login</a>
            <?php } ?>
        </li>
    </ul>
</div>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">LexiShop</a>
  </div>
</nav>

<!-- Back Button -->
<div class="container mt-5">
    <a href="index.php" class="back-btn">Back to Store</a>
</div>

<!-- Main Content -->
<div class="container content">
    <div class="team-header">
        <img src="img/logo1.png" alt="Infinity Coders Logo">
        <h2>Meet Infinity Coders</h2>
        <p>We are a team of determined individuals creating a seamless BookStore Management System.</p>
    </div>

    <div class="team-member">
        <div class="d-flex align-items-center">
            <img src="img/sarita.png" alt="Sarita Sangrez">
            <div class="ms-3">
                <h3>Sarita Sangrez</h3>
                <p>Digital and critical thinking areas excite her the most, so she narrowed down to Cyber Security. Sarita is a Cyber Security undergraduate with a passion for Technology and strong analytical skills. She's focused on building innovative and dependable solutions. Sarita aims to leave a mark on the industry by constantly expanding her skillset.</p>
                <a href="https://github.com/SaritaSangrez" target="_blank">Github Account</a>
            </div>
        </div>
    </div>

    <div class="team-member">
        <div class="d-flex align-items-center">
            <img src="img/shanzay.png" alt="Syeda Shanzay Shah">
            <div class="ms-3">
                <h3>Syeda Shanzay Shah</h3>
                <p>Syeda Shanzay is a cybersecurity student with a keen interest in software engineering. Currently, she’s working on a web development project, focusing on building secure, efficient, and user-friendly applications. She integrates security best practices into modern software solutions with a strong foundation in cybersecurity.</p>
                <a href="https://github.com/S-hub001" target="_blank">Github Account</a>
            </div>
        </div>
    </div>

    <div class="team-member">
        <div class="d-flex align-items-center">
            <img src="img/laiba.png" alt="Laiba Nasir">
            <div class="ms-3">
                <h3>Laiba Nasir</h3>
                <p>Laiba Nasir is a cybersecurity student with a strong foundation in network security and secure coding practices. She is passionate about cybersecurity and eager to apply her skills in real-world projects. Laiba aims to develop secure and efficient applications while enhancing software security standards.</p>
                <a href="https://github.com/Laiba-Laiba" target="_blank">Github Account</a>
            </div>
        </div>
    </div>

</div>

<!-- Footer (Optional) -->
<footer class="text-center py-3">
    <p>&copy; 2025 Infinity Coders | All Rights Reserved</p>
</footer>

</body>
</html>
