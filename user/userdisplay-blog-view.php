<!--session link-->
<?php include '../php/dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
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
            <section id="inputs">
                <div class="row">
                    <div class="col-12 border g-2 d-flex justify-content-start align-items-center">
                        <a href="userdisplay-blog.php" class=" text-decoration-none text-dark fw-bold" style="font-size: 1.3rem;"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>
                    </div>
                </div>

                <!--Select all from tb_blogs to display-->
                <?php 
                    $bid=$_GET['blog_id'];

                    $query = "SELECT * FROM tb_blogs WHERE blog_id = '$bid'";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result))
                    {
                        $category=$row['category'];
                        $title=$row['title'];
                        $blog=$row['blog'];
                        $datetime=$row['datetime'];
                ?>
            </section>
            <!--Second Section to display blogs-->
            <section id="blogs" class="mt-2 d-flex justify-content-center" style="height: 74vh;">
                <div class="row g-1" style="width: 100%">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header fw-bold d-flex justify-content-between" style="font-size: 1rem;">
                                <?php echo $category; ?>  
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $title; ?></h5>
                                <p class="text-muted m-1" style="font-size: .8rem;">Date Posted: <?php echo $datetime; ?></p>
                                <textarea class="sentence" style="font-size: 1.1rem; border: none; width: 100%; height: 60vh;  line-height: 2; text-align: justify;" readonly><?php echo $blog; ?></textarea>
                            </div>
                        </div>
                    </div>

                    <?php
                        }
                    ?>
                </div>
            </section>
        </div>
    </main>
</body>
</html>