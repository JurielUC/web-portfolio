<!--session link-->
<?php include '../php/session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - My Website</title>
    <link rel="shortcut icon" href="../image/tab-img.png" type="image/x-icon">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../custom-style/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../custom-style/loading.css?v=<?php echo time(); ?>">
    <script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script defer src="../js/loading-hide.js"></script>
    <!-- Add a script element to include the jQuery library -->
    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" 
        href="https://fonts.gstatic.com" crossorigin
    >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,
        100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;
        1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" 
        rel="stylesheet"
    >
    <link rel="stylesheet" href="../icons/node_modules/bootstrap-icons/font/bootstrap-icons.css">

</head>
<body>
    <header class="container-fluid bg-dark sticky-top" style="height: 70px;">
        <div class="navi row container-fluid h-100 text-white d-flex align-items-center">
            <div class="col-12">
                <h3 class="head-name ms-4 fw-bold"><i class="bi bi-code-slash"></i> My Website</h3>
            </div>
        </div>
    </header>
    <div class="container-fluid divider" style="height: 15px"></div>
    <nav style="height: 90vh; width: 280px; margin-top: 1px;" class="border dashboard-navi">
        <div class="row" style="height: 80px">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h5 class="border-bottom px-5 py-4"><i class="bi bi-menu-app"></i> Dashboard</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12  d-flex justify-content-center align-items-center">
                <a class="db-navi py-4 text-decoration-none link-dark" href="#"><i class="bi bi-pen"></i> Blogs</a>
            </div>
            <div class="col-12  d-flex justify-content-center align-items-center">
                <a class="db-navi py-4 text-decoration-none link-dark" href="message.php"><i class="bi bi-chat-left"></i> Messages</a>
            </div>
            <div class="col-12  d-flex justify-content-center align-items-center">
                <a class="db-navi py-4 text-decoration-none link-dark" href="project.php"><i class="bi bi-folder"></i> Projects</a>
            </div>
            <div class="col-12  d-flex justify-content-center align-items-center">
                <a class="db-navi py-4 text-decoration-none link-dark" href="../php/logout.php"><i class="bi bi-box-arrow-left"></i> Logout</a>
            </div>
        </div>
    </nav>
    <div id="loading-animation">
        <img id="loading-image" src="../image/loading.gif" alt="Loading..." />
    </div>
    <main id="main-content" class="dashboard-content">
        <section id="blogs">
            <?php echo $lgn_fname; ?>
        </section>
    </main>
</body>
</html>