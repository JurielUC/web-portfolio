<!--session link-->
<?php include '../php/dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
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
    <div id="loading-animation">
        <img id="loading-image" src="../image/loading.gif" alt="Loading..." />
    </div>
    <main id="main-content" style="height: 87vh;">
        <div class="container h-100">
            <div class="row mb-1">
                <div class="col-12 border g-2 d-flex justify-content-center align-items-center">
                    <a href="../index.php#projectss" class="p-1 text-decoration-none text-dark"><i class="bi bi-house-fill"></i> Back to Home</a>
                </div>
            </div>
            <div class="row h-50">
                <div class="col-12 h-100 border bg-secondary">
                    <div id="carouselExampleIndicators" class="carousel slide h-100" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        </div>
                        <div class="carousel-inner h-100">
                            <div class="carousel-item active h-100">
                                <img src="../image/projects/ig1.jpg" class="d-block h-100 m-auto" alt="...">
                            </div>
                            <div class="carousel-item  h-100">
                                <img src="../image/projects/ig2.jpg" class="d-block h-100 m-auto" alt="...">
                            </div>
                            <div class="carousel-item  h-100">
                                <img src="../image/projects/ig3.jpg" class="d-block h-100 m-auto" alt="...">
                            </div>
                            <div class="carousel-item  h-100">
                                <img src="../image/projects/cp-1.png" class="d-block h-100 m-auto" alt="...">
                            </div>
                            <div class="carousel-item  h-100">
                                <img src="../image/projects/cp-2.png" class="d-block h-100 m-auto" alt="...">
                            </div>
                            <div class="carousel-item  h-100">
                                <img src="../image/projects/mw-1.png" class="d-block h-100 m-auto" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4 border text-center">
                    <a href="" class="p-2 text-decoration-none text-dark"><i class="bi bi-image-fill"></i> Photo Editing</a>
                </div>
                <div class="col-sm-4 border text-center">
                    <a href="" class="p-2 text-decoration-none text-dark"><i class="bi bi-camera-reels-fill"></i> Video Editing</a>
                </div>
                <div class="col-sm-4 border text-center">
                    <a href="" class="p-2 text-decoration-none text-dark"><i class="bi bi-file-code-fill"></i> Web Development</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>