<!--session link-->
<?php include '../php/session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs | Dashboard</title>
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
                        <a href="blog.php" class=" text-decoration-none text-dark fw-bold" style="font-size: 1.3rem;"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>
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

                <!--Modal for blog input-->
                <div class="modal fade" id="publisher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-pencil-square"></i> Edit a Blog</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../php/publish-blog.php" method="POST" id="publish_blog">
                                <div class="mb-3">
                                    <label for="category" class="col-form-label">Category:</label>
                                    <select name="category" id="category" class="form-control" required>
                                        <option value="<?php echo $category; ?>" class="text-muted"><?php echo $category; ?></option>
                                        <option value="Article">Article</option>
                                        <option value="DB Management">DB Management</option>
                                        <option value="IT Trends">IT Trends</option>
                                        <option value="Motivation">Motivation</option>
                                        <option value="Programming">Programming</option>
                                        <option value="Quotes">Quotes</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="col-form-label">Title:</label>
                                    <input type="text" name="title" class="form-control" id="title" value="<?php echo $title; ?>" required> 
                                </div>
                                <div class="mb-3">
                                    <label for="blog" class="col-form-label">Blog:</label>
                                    <textarea name="blog" class="form-control" rows="8" id="blog" required><?php echo $blog; ?></textarea>
                                </div>
                                <input type="hidden" name="blog_id" value="<?php echo $row['blog_id'] ?>">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="publish_blog" name="update_blog" class="btn btn-dark">Update</button>
                        </div>
                        </div>
                    </div>
                </div>

                <!-- Modal for Delete-->
                <div class="modal fade" id="deleteMe" tabindex="-1" aria-labelledby="deleteMeLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-body">
                            <h1 class="modal-title fs-4" id="deleteMeLabel"><i class="bi bi-exclamation-triangle-fill"></i> Delete Blog</h1>
                            Do you really want to delete this blog? This cannot be undone. 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" onclick="window.location.href='../php/delete-blog.php?blog_id=<?php echo $row['blog_id'] ?>'" class="btn btn-danger">Delete</button>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Second Section to display blogs-->
            <section id="blogs" class="mt-2 overflow-auto d-flex justify-content-center" style="height: 74vh;">
                <div class="row g-1" style="width: 50%">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header fw-bold d-flex justify-content-between" style="font-size: 1rem;">
                                <?php echo $category; ?>
                                <div>
                                    <a href="" class="p-1 text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#publisher"><i class="bi bi-pencil-square"></i> Edit</a>
                                    <a href="" class="p-1 text-decoration-none text-danger" data-bs-toggle="modal" data-bs-target="#deleteMe"><i class="bi bi-trash"></i> Delete</a>
                                </div>
                                
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $title; ?></h5>
                                <p class="text-muted m-1" style="font-size: .8rem;">Date Posted: <?php echo $datetime; ?></p>
                                <p class="sentence" style="font-size: 1.1rem;  line-height: 2; text-align: justify;"><?php echo $blog; ?></p>
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