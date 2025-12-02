<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EShop - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=home">
                <i class="fas fa-shopping-bag"></i> EShop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if($_GET['page']=='home'){echo "active";}?>" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_GET['page']=='products'){echo "active";}?>" href="?page=products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_GET['page']=='about'){echo "active";}?>" href="?page=about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_GET['page']=='contact'){echo "active";}?>" href="?page=contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_GET['page']=='login'){echo "active";}?>" href="?page=login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_GET['page']=='cart'){echo "active";}?>" href="?page=cart">
                            <i class="fas fa-shopping-cart"></i> Cart <span class="badge bg-warning text-dark ms-1">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
