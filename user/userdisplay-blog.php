<!--session link-->
<?php include '../php/dbconnect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs | List</title>
    <link rel="shortcut icon" href="../image/tab-img.png" type="image/x-icon">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../custom-style/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../custom-style/loading.css?v=<?php echo time(); ?>">
    <script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script defer src="../js/loading-hide.js"></script>
    <script defer src="../js/truncate-text.js"></script>
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
                    <div class="col-6 border g-2 d-flex justify-content-center align-items-center">
                        <a href="../index.php#blogss" class="p-1 text-decoration-none text-dark"><i class="bi bi-house-fill"></i> Back to Home</a>
                    </div>
                    <div class="col-6 border g-2 d-flex justify-content-center align-items-center">
                        <a href="" class="p-1 text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#cate-display"><i class="bi bi-bookmarks-fill"></i> View Categories</a>
                    </div>
                </div>

                <!--Modal for category-->
                <div class="modal fade" id="cate-display" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-bookmarks-fill"></i> Blog Category</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--Collapse List of Category-->
                            <!--Article-->
                            <p>
                                <a class="btn btn-dark w-100" data-bs-toggle="collapse" href="#collapseArticle" role="button" aria-expanded="false" aria-controls="collapseArticle">
                                    Article
                                </a>
                            </p>
                            <div class="collapse" id="collapseArticle">
                                <?php 
                                    $arti = "SELECT * FROM tb_blogs WHERE category = 'Article' ORDER BY title";
                                    $art_res = mysqli_query($conn, $arti);

                                    while ($artrow = mysqli_fetch_assoc($art_res))
                                    {
                                ?>
                                <div class="card card-body mb-1">
                                    <a class="text-dark" href="userdisplay-blog-view.php?blog_id=<?php echo $artrow['blog_id']; ?>"><?php echo $artrow['title']; ?></a>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>

                            <!--DB Management-->
                            <p>
                                <a class="btn btn-dark w-100" data-bs-toggle="collapse" href="#collapseDBM" role="button" aria-expanded="false" aria-controls="collapseDBM">
                                    DB Management
                                </a>
                            </p>
                            <div class="collapse" id="collapseDBM">
                                <?php 
                                    $dbm = "SELECT * FROM tb_blogs WHERE category = 'DB Management' ORDER BY title";
                                    $dbm_res = mysqli_query($conn, $dbm);

                                    while ($dbrow = mysqli_fetch_assoc($dbm_res))
                                    {
                                ?>
                                <div class="card card-body mb-1">
                                    <a class="text-dark" href="userdisplay-blog-view.php?blog_id=<?php echo $dbrow['blog_id']; ?>"><?php echo $dbrow['title']; ?></a>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>

                            <!--IT Trends-->
                            <p>
                                <a class="btn btn-dark w-100" data-bs-toggle="collapse" href="#collapseITT" role="button" aria-expanded="false" aria-controls="collapseITT">
                                    IT Trends
                                </a>
                            </p>
                            <div class="collapse" id="collapseITT">
                                <?php 
                                    $itrends = "SELECT * FROM tb_blogs WHERE category = 'IT Trends' ORDER BY title";
                                    $itr_res = mysqli_query($conn, $itrends);

                                    while ($itrrow = mysqli_fetch_assoc($itr_res))
                                    {
                                ?>
                                <div class="card card-body mb-1">
                                    <a class="text-dark" href="userdisplay-blog-view.php?blog_id=<?php echo $itrow['blog_id']; ?>"><?php echo $itrrow['title']; ?></a>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>

                            <!--Motivation-->
                            <p>
                                <a class="btn btn-dark w-100" data-bs-toggle="collapse" href="#collapseMoti" role="button" aria-expanded="false" aria-controls="collapseMoti">
                                    Motivation
                                </a>
                            </p>
                            <div class="collapse" id="collapseMoti">
                                <?php 
                                    $motiv = "SELECT * FROM tb_blogs WHERE category = 'Motivation' ORDER BY title";
                                    $mtv_res = mysqli_query($conn, $motiv);

                                    while ($mtvrow = mysqli_fetch_assoc($mtv_res))
                                    {
                                ?>
                                <div class="card card-body mb-1">
                                    <a class="text-dark" href="userdisplay-blog-view.php?blog_id=<?php echo $mtrow['blog_id']; ?>"><?php echo $mtvrow['title']; ?></a>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>

                            <!--Programming-->
                            <p>
                                <a class="btn btn-dark w-100" data-bs-toggle="collapse" href="#collapseProg" role="button" aria-expanded="false" aria-controls="collapseProg">
                                    Programming
                                </a>
                            </p>
                            <div class="collapse" id="collapseProg">
                                <?php 
                                    $progr = "SELECT * FROM tb_blogs WHERE category = 'Programming' ORDER BY title";
                                    $prg_res = mysqli_query($conn, $progr);

                                    while ($prgrow = mysqli_fetch_assoc($prg_res))
                                    {
                                ?>
                                <div class="card card-body mb-1">
                                    <a class="text-dark" href="userdisplay-blog-view.php?blog_id=<?php echo $prgrow['blog_id']; ?>"><?php echo $prgrow['title']; ?></a>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>

                            <!--Quotes-->
                            <p>
                                <a class="btn btn-dark w-100" data-bs-toggle="collapse" href="#collapseQ" role="button" aria-expanded="false" aria-controls="collapseQ">
                                    Quotes
                                </a>
                            </p>
                            <div class="collapse" id="collapseQ">
                                <?php 
                                    $qts = "SELECT * FROM tb_blogs WHERE category = 'Quotes' ORDER BY title";
                                    $qts_res = mysqli_query($conn, $qts);

                                    while ($qtsrow = mysqli_fetch_assoc($qts_res))
                                    {
                                ?>
                                <div class="card card-body mb-1">
                                    <a class="text-dark" href="userdisplay-blog-view.php?blog_id=<?php echo $qtsrow['blog_id']; ?>"><?php echo $qtsrow['title']; ?></a>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>

                <!--Search Bar-->
                <div class="row">
                    <div class="col-6 d-flex justify-content-start align-items-center">
                        <!--Total number of blogs posted-->
                        <?php
                             $counts = "SELECT COUNT(id) AS total_blogs FROM tb_blogs";
                             $res_count = mysqli_query($conn, $counts);

                             while($row_count = mysqli_fetch_assoc($res_count))
                             {
                        ?>
                        <p class="my-auto">Total Blogs Posted: <b><?php echo $row_count['total_blogs']; ?></b></p>
                        <?php
                             }
                        ?>
                    </div>
                    <div class="col-6 g-2 d-flex justify-content-end align-items-center">
                        <form action="userdisplay-blog-search.php" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" style="width: 85%" name="valueToSearch" id="" placeholder="Search...">
                                <button class="form-control" style="width: 15%" name="search"  title="Search"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!--Second Section to display blogs-->
            <section id="blogs" class="mt-2 overflow-auto" style="height: 74vh;">
                <div class="row g-1" style="width: 99%">
                    
                    <!--Select all from tb_blogs to display-->
                    <?php 
                        require_once '../php/select-all-blogs.php';

                        while ($row = mysqli_fetch_assoc($result))
                        {
                            $category=$row['category'];
                            $title=$row['title'];
                            $blog=$row['blog'];
                            $datetime=$row['datetime'];
                            $uni_id=$row['blog_id'];

                            // strip tags to avoid breaking any html
                            $string = strip_tags($blog);
                            if (strlen($string) > 130) {

                                // truncate string
                                $stringCut = substr($string, 0, 130);
                                $endPoint = strrpos($stringCut, ' ');

                                //if the string doesn't contain any space then it will cut without word basis.
                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                $string .= '...';
                            }
                    ?>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header fw-bold" style="font-size: .8rem;">
                                <?php echo $category; ?>
                            </div>
                            <div class="card-body" style="height: 300px;">
                                <h5 class="card-title"><?php echo $title; ?></h5>
                                <p class="sentence" style="font-size: .9rem;"><?php echo $string; ?></p>
                                <a href="userdisplay-blog-view.php?blog_id=<?php echo $uni_id; ?>" class="text-dark">Read More...</a>
                                <p class="text-muted m-1" style="font-size: .8rem;"><?php echo $datetime; ?></p>
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