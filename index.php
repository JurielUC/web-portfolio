<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="shortcut icon" href="image/tab-img.png" type="image/x-icon">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="custom-style/style.css?v=<?php echo time(); ?>">
    <script defer src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script defer src="js/active-nav.js"></script>
    <script defer src="js/fade-in.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" 
        href="https://fonts.gstatic.com" crossorigin
    >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,
        100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;
        1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" 
        rel="stylesheet"
    >
    <link rel="stylesheet" href="icons/node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>
<style>
    /* For Navbar Animation */
    .navi .cont ul li.active-two a {
        opacity: 50%;
        border-bottom: 2px solid #ffffff;
        padding: 10px 0;
        transition: 0.3s;
    }

    /* For animation transition */
    .reveal {
        position: relative;
        transform: translateY(150px);
        opacity: 0;
        transition: 2s all ease;
    }

    .reveal.active {
        transform: translateY(0);
        opacity: 1;
    }
</style>
<body>
    <header class="container-fluid bg-dark sticky-top" style="height: 70px;">
        <div class="navi row container-fluid h-100 text-white d-flex align-items-center">
            <div class="col-3">
                <h3 class="head-name ms-4 fw-bold"><i class="bi bi-code-slash"></i> My Website</h3>
            </div>
            <div class="col-9 cont reveal">
                <ul class="list-unstyled d-flex mt-2 fs-6 justify-content-end nav-1">
                    <li class="mx-4 homee active-two"><a class="text-decoration-none text-white" href="#homee"><i class="bi bi-house-fill"></i> Home</a></li>
                    <li class="mx-4 aboutt"><a class="text-decoration-none text-white" href="#aboutt"><i class="bi bi-file-person-fill"></i> About</a></li>
                    <li class="mx-4 skillss"><a class="text-decoration-none text-white" href="#skillss"><i class="bi bi-gear-fill"></i> Skills</a></li>
                    <li class="mx-4 projectss"><a class="text-decoration-none text-white" href="#projectss"><i class="bi bi-folder-fill"></i> Projects</a></li>
                    <li class="mx-4 blogss"><a class="text-decoration-none text-white" href="#blogss"><i class="bi bi-pen-fill"></i> Blogs</a></li>
                    <li class="mx-4 contacts"><a class="text-decoration-none text-white" href="#contacts"><i class="bi bi-person-lines-fill"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid divider" style="height: 15px"></div>
    <main>
        <section class="home" id="homee">
            <div class="container h-100 reveal">
                <div class="row h-100">
                    <div class="col-6 d-flex align-items-center">
                        <div>
                            <p>- Hello,</p>
                            <div class="typewriter">
                                <p class="display-3">I'm <span class="fw-bold">Juriel.</span></p>
                            </div>
                            <p>This is <b>Juriel Comia</b> graphic designer and web developer located in Lemery, Batangas.</p>
                            <a href="https://drive.google.com/file/d/1uGq6QPkyHsfVd-bbWyetUu3hgpRNAJx3/view?usp=sharing" target="_blank" class="btn btn-dark">Download CV <i class="bi bi-cloud-arrow-down"></i></a>
                        </div>
                    </div>
                    <div class="col-6 d-flex align-items-end">
                        <div>
                            <img src="image/me4.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about d-flex align-items-center" id="aboutt">
            <div class="container reveal">
                <div class="card-group">
                    <div class="card">
                        <img src="image/18.jpg" alt="">
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="fw-bold"><i class="bi bi-file-person-fill"></i> About</h4>
                        </div>
                        <div class="card-body">
                            <p style="text-align: justify; line-height: 2;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Hello, and thank you for visiting my online portfolio. I'm 
                                Juriel, aspiring Web Developer and Graphic Designer from 
                                Lemery, Batangas. At Batangas State University - The National 
                                Engineering University, I'm now pursuing a Bachelor of Science 
                                in Information Technology with specialization of Service 
                                Management.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="skills d-flex align-items-center" id="skillss">
            <div class="container reveal">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"><i class="bi bi-gear-fill"></i> Skills</h3>
                            </div>
                            <div class="card-footer text-muted" style="font-size: 1vw;">
                                These are the software and computer languages I use to create a project.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="card h-100 text-center">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <img src="image/html-img.png" width="60%" alt="...">
                                <p class="card-text" style="font-size: 1vw;">HTML</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <img src="image/css-img.png" width="60%" alt="...">
                                <p class="card-text" style="font-size: 1vw;">CSS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <img src="image/sass.png" style="margin-bottom: 35px;" width="60%" alt="...">
                                <p class="card-text" style="font-size: 1vw;">SASS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <img src="image/bootstrap-logo-black.png" style="margin-bottom: 37px;" width="60%" alt="...">
                                <p class="card-text" style="font-size: 1vw;">Bootstrap</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <img src="image/php.png" style="margin: 33px 0;" width="60%" alt="...">
                                <p class="card-text" style="font-size: 1vw;">PHP</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <img src="image/mysql-img.png" style="margin: 0 0 5px 0;" width="60%" alt="...">
                                <p class="card-text" style="font-size: 1vw;">My SQL</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <div class="card h-100 text-center">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <img src="image/figma-img.png" width="60%" alt="...">
                                <p class="card-text" style="font-size: 1vw;">Figma</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <img src="image/xd-img.png" style="margin-bottom: 35px;" width="60%" alt="...">
                                <p class="card-text" style="font-size: 1vw;">Adobe Xd</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <img src="image/ps-img.png" style="margin-bottom: 35px;" width="60%" alt="...">
                                <p class="card-text" style="font-size: 1vw;">Photoshop</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <img src="image/hosting.png" style="margin-bottom: 33px;" width="60%" alt="...">
                                <p class="card-text" style="font-size: 1vw;">Web Hosting</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <img src="image/dbm.png" style="margin: 0 0 33px 0;" width="60%" alt="...">
                                <p class="card-text" style="font-size: 1vw;">DB Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body d-flex flex-column justify-content-between align-items-center">
                                <img src="image/video-edit.png" style="margin: 0 0 30px 0;" width="60%" alt="...">
                                <p class="card-text" style="font-size: 1vw;">Video Editing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="projects d-flex align-items-center" id="projectss">
            <div class="container reveal">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"><i class="bi bi-folder-fill"></i> Projects</h3>
                            </div>
                            <div class="card-footer text-muted" style="font-size: 1vw;">
                                These are the sample projects I've created.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="image/Graphic.png" style="margin: 0 0 30px 0;" width="70%" alt="...">
                                <h3>Photo Editing</h3>
                            </div>
                            <div class="card-footer">
                                <a href="user/under-construction.php" class="btn btn-dark w-50" style="font-size: 1vw;"><i class="bi bi-binoculars-fill"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="image/video-edit.png" style="margin: 0 0 30px 0;" width="70%" alt="...">
                                <h3>Video Editing</h3>
                            </div>
                            <div class="card-footer">
                                <a href="user/under-construction.php" class="btn btn-dark w-50" style="font-size: 1vw;"><i class="bi bi-binoculars-fill"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="image/web-dev.png" style="margin: 0 0 30px 0;" width="70%" alt="...">
                                <h3>Web Dev Projects</h3>
                            </div>
                            <div class="card-footer">
                                <a href="user/under-construction.php" class="btn btn-dark w-50" style="font-size: 1vw;"><i class="bi bi-binoculars-fill"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blogs d-flex align-items-center" id="blogss">
            <div class="container reveal">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"><i class="bi bi-pen-fill"></i> Blogs</h3>
                            </div>
                            <div class="card-footer text-muted" style="font-size: 1vw;">
                                Here I write blogs and step-by-step coding tutorials.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-group">
                            <?php 
                                include_once 'php/dbconnect.php';

                                $query = "SELECT * FROM tb_blogs WHERE blog_id = '964453033'";
                                $result = mysqli_query($conn, $query);

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
                                        $stringCut = substr($string, 0, 140);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '...';
                                    }
                            ?>
                            <div class="card">
                                <div class="card-header">
                                    <h5><?php echo $category ?></h5>
                                </div>
                                <div class="card-body" style="text-align: justify;">
                                    <h4 class="card-title"><?php echo $title; ?></h4>
                                    <p style="font-size: 1vw;"><?php echo $string; ?></p>
                                    <a style="font-size: 1vw;" href="user/userdisplay-blog-view.php?blog_id=<?php echo $uni_id; ?>" class="btn btn-dark"><i class="bi bi-book"></i> Continue Reading...</a>
                                </div>
                                <div class="card-footer text-center">
                                    <p class="text-muted" style="font-size: 1vw;">Date Posted: <?php echo $datetime; ?></p>
                                </div>
                            </div>
                            <?php 
                                }

                                $query2 = "SELECT * FROM tb_blogs WHERE blog_id = '338158280'";
                                $result2 = mysqli_query($conn, $query2);

                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    $category2=$row2['category'];
                                    $title2=$row2['title'];
                                    $blog2=$row2['blog'];
                                    $datetime2=$row2['datetime'];
                                    $uni_id2=$row2['blog_id'];

                                    // strip tags to avoid breaking any html
                                    $string2 = strip_tags($blog2);
                                    if (strlen($string2) > 130) {

                                        // truncate string
                                        $stringCut2 = substr($string2, 0, 140);
                                        $endPoint2 = strrpos($stringCut2, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string2 = $endPoint2? substr($stringCut2, 0, $endPoint2) : substr($stringCut2, 0);
                                        $string2 .= '...';
                                    }
                            ?>
                            <div class="card">
                                <div class="card-header">
                                    <h5><?php echo $category2 ?></h5>
                                </div>
                                <div class="card-body" style="text-align: justify;">
                                    <h4 class="card-title"><?php echo $title2; ?></h4>
                                    <p style="font-size: 1vw;"><?php echo $string2; ?></p>
                                    <a style="font-size: 1vw;" href="user/userdisplay-blog-view.php?blog_id=<?php echo $uni_id2; ?>" class="btn btn-dark"><i class="bi bi-book"></i> Continue Reading...</a>
                                </div>
                                <div class="card-footer text-center">
                                    <p class="text-muted" style="font-size: 1vw;">Date Posted: <?php echo $datetime2; ?></p>
                                </div>
                            </div>
                            <?php 
                                }

                                $query3 = "SELECT * FROM tb_blogs WHERE blog_id = '1029125450'";
                                $result3 = mysqli_query($conn, $query3);

                                while ($row3 = mysqli_fetch_assoc($result3)) {
                                    $category3=$row3['category'];
                                    $title3=$row3['title'];
                                    $blog3=$row3['blog'];
                                    $datetime3=$row3['datetime'];
                                    $uni_id3=$row3['blog_id'];

                                    // strip tags to avoid breaking any html
                                    $string3 = strip_tags($blog3);
                                    if (strlen($string3) > 130) {

                                        // truncate string
                                        $stringCut3 = substr($string3, 0, 140);
                                        $endPoint3 = strrpos($stringCut3, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string3 = $endPoint3? substr($stringCut3, 0, $endPoint3) : substr($stringCut3, 0);
                                        $string3 .= '...';
                                    }
                            ?>
                            <div class="card">
                                <div class="card-header">
                                    <h5><?php echo $category3 ?></h5>
                                </div>
                                <div class="card-body" style="text-align: justify;">
                                    <h4 class="card-title"><?php echo $title3; ?></h4>
                                    <p style="font-size: 1vw;"><?php echo $string3; ?></p>
                                    <a style="font-size: 1vw;" href="user/userdisplay-blog-view.php?blog_id=<?php echo $uni_id3; ?>" class="btn btn-dark"><i class="bi bi-book"></i> Continue Reading...</a>
                                </div>
                                <div class="card-footer text-center">
                                    <p class="text-muted" style="font-size: 1vw;">Date Posted: <?php echo $datetime3; ?></p>
                                </div>
                            </div>
                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href="user/userdisplay-blog.php" class="link-dark" style="font-size: 1vw;">Read more blogs...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact d-flex align-items-center" id="contacts">
            <div class="container reveal">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"><i class="bi bi-person-lines-fill"></i> Contact</h3>
                            </div>
                            <div class="card-footer text-muted" style="font-size: 1vw;">
                                For inquiries, kindly visit these platforms or send a message.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-group">
                            <div class="card h-100">
                                <div class="card-body mx-3 h-100">
                                    <div class="row h-100">
                                        <div class="col-6 border">
                                            <a class="h-100 w-100 d-flex justify-content-center align-items-center" target="_blank" href="https://www.facebook.com/juriel.comia.7/"><img src="image/facebook.png" width="63%" style="margin: 30px 0;" alt=""></a>
                                        </div>
                                        <div class="col-6 border">
                                            <a class="h-100 w-100 d-flex justify-content-center align-items-center" target="_blank" href="https://www.linkedin.com/in/juriel-comia-49769525a/"><img src="image/linked-in.png" width="63%" style="margin: 30px 0;" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="row h-100">
                                        <div class="col-6 border">
                                            <a class="h-100 w-100 d-flex justify-content-center align-items-center" target="_blank" href="https://github.com/JurielUC"><img src="image/Github.png" width="63%" style="margin: 30px 0;" alt=""></a>
                                        </div>
                                        <div class="col-6 border">
                                            <a class="h-100 w-100 d-flex justify-content-center align-items-center" target="_blank" href="mailto:juriel.ucomia@gmail.com"><img src="image/Email.png" width="63%" style="margin: 30px 0;" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="fw-bold"><i class="bi bi-chat-dots-fill"></i> Get in touch</h5>
                                </div>
                                <div class="card-body">
                                    <form action="php/feedback.php" method="GET">
                                        <div class="mb-2">
                                            <label for="name" class="form-label" style="font-size: 1vw;"><i class="bi bi-person"></i> Name</label>
                                            <input type="text" name="name" class="form-control" id="name">
                                        </div>
                                        <div class="mb-2">
                                            <label for="email" class="form-label" style="font-size: 1vw;"><i class="bi bi-envelope-at"></i> Email</label>
                                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text" style="font-size: 1vw;">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message" class="form-label" style="font-size: 1vw;"><i class="bi bi-chat-dots"></i> Message</label>
                                            <textarea class="form-control" name="message" id="message" rows="2"></textarea>
                                        </div>
                                        <button type="submit" name="submit_message" class="btn btn-dark" style="width: 100%; font-size: 1vw;"><i class="bi bi-send"></i> Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
            if(!empty($_GET['message'])) {
                $message = $_GET['message'];
                echo "<script>alert('$message')</script>";
            }
        ?>
    </main>
    <footer>
        <div class="bg-dark text-light d-flex h-100 justify-content-center align-items-center">
            <p>© <a href="login.php" target="_blank" class=" text-decoration-none text-light">Juriel Comia</a>. All Rights Reserved</p>
        </div>
    </footer>
    <div class="not-pc" style="height: 90vh; width: 100%;">
        <div class="mt-2 d-flex justify-content-center align-items-center w-100" style="height: 80vh;">
            <div class="row g-1">
                <div class="col-12 text-center">
                    <img src="image/under-construction.gif" alt="" width="50%">
                    <p class="headings-1 fw-bold">Sorry, this is not available on mobile</p>
                    <p style="font-size: .8rem;">Working on it! For now try it on your laptop or pc.</p>
                    <p style="font-size: .8rem;">Thank you for understanding.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>