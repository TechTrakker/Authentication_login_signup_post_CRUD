<?php
include 'db.php';
include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <nav class="navbar bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" id="heading">PHP CRUD BASED AUTHENTICATION</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- Navbar************************************************************************************* -->
<!-- Alert Container -->
<div id="alertContainer"></div>

    <div class="container mt-5">
        <?php if (!isLoggedIn()): ?>
            <div class="text-center">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal" id="signup">Signup</button>
                <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#loginModal" id="login">Login</button>
            </div>
        <?php else: ?>
            <div class="text-center">
                <h1>Welcome..! <?php echo getUsername(); ?></h1>
                <button class="btn btn-danger" id="logoutBtn">Logout</button>
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#postModal">Create Post</button>
            </div>

            <h2 class="mt-4">Your Posts are here....</h2>
            <div id="postsContainer" class="mt-3"></div>
        <?php endif; ?>
    </div>
    <!-- NEW**************************************** -->
    <div id="postsContainer"></div>
    <?php include 'modals.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts.js"></script>
</body>

</html>