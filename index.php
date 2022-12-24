<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="custom-style/style.css?v=<?php echo time(); ?>">
    <script defer src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script defer src="js/active-nav.js"></script>
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
    .navi .cont ul li.active-two a {
        opacity: 50%;
        border-bottom: 2px solid #ffffff;
        padding: 10px 0;
        transition: 0.3s;
    }
</style>
<body>
    <header class="container-fluid bg-dark sticky-top" style="height: 70px;">
        <div class="navi row container-fluid h-100 text-white d-flex align-items-center">
            <div class="col">
                <h3 class="ms-4 fw-bold"><i class="bi bi-code-slash"></i> My Website</h3>
            </div>
            <div class="col cont">
                <ul class="list-unstyled d-flex mt-2 fs-6 justify-content-end">
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
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-6 d-flex align-items-center">
                        <div>
                            <p>- Hello,</p>
                            <div class="typewriter">
                                <p class="display-3">I'm <span class="fw-bold">Juriel.</span></p>
                            </div>
                            <p>This is <b>Juriel Comia</b> graphic designer and front-end web developer located in Lemery, Batangas.</p>
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
            <div class="container">
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
                                Juriel, a Front-End Web Developer and Graphic Designer from 
                                Lemery, Batangas. At Batangas State University - The National 
                                Engineering University, I'm now pursuing a Bachelor of Science 
                                in Information Technology with specialization of Service 
                                Management. My goal is to use my expertise to assist your firm 
                                to develop.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="skills d-flex align-items-center" id="skillss">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"><i class="bi bi-gear-fill"></i> Skills</h3>
                            </div>
                            <div class="card-footer text-muted">
                                These are the software and computer languages I use to create a project.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <img src="image/html-img.png" width="100px" alt="...">
                                <p class="card-text">HTML</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <img src="image/css-img.png" width="100px" alt="...">
                                <p class="card-text">CSS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <img src="image/sass.png" style="margin-bottom: 35px;" width="100px" alt="...">
                                <p class="card-text">SASS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <img src="image/bootstrap-logo-black.png" style="margin-bottom: 37px;" width="120px" alt="...">
                                <p class="card-text">Bootstrap</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <img src="image/php.png" style="margin: 33px 0;" width="120px" alt="...">
                                <p class="card-text">PHP</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <img src="image/mysql-img.png" style="margin: 0 0 5px 0;" width="120px" alt="...">
                                <p class="card-text">My SQL</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <img src="image/figma-img.png" width="90px" alt="...">
                                <p class="card-text">Figma</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <img src="image/xd-img.png" style="margin-bottom: 35px;" width="100px" alt="...">
                                <p class="card-text">Adobe Xd</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <img src="image/ps-img.png" style="margin-bottom: 35px;" width="100px" alt="...">
                                <p class="card-text">Photoshop</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <img src="image/hosting.png" style="margin-bottom: 33px;" width="100px" alt="...">
                                <p class="card-text">Web Hosting</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <img src="image/dbm.png" style="margin: 0 0 33px 0;" width="100px" alt="...">
                                <p class="card-text">DB Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <img src="image/video-edit.png" style="margin: 0 0 30px 0;" width="100px" alt="...">
                                <p class="card-text"> Video Editing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="projects d-flex align-items-center" id="projectss">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"><i class="bi bi-folder-fill"></i> Projects</h3>
                            </div>
                            <div class="card-footer text-muted">
                                These are the sample projects I've created.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="image/Graphic.png" style="margin: 0 0 30px 0;" width="200px" alt="...">
                                <h3>Photo Editing</h3>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-dark w-50"><i class="bi bi-binoculars-fill"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="image/video-edit.png" style="margin: 0 0 30px 0;" width="200px" alt="...">
                                <h3>Video Editing</h3>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-dark w-50"><i class="bi bi-binoculars-fill"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="image/web-dev.png" style="margin: 0 0 30px 0;" width="200px" alt="...">
                                <h3>Web Dev Projects</h3>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-dark w-50"><i class="bi bi-binoculars-fill"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blogs d-flex align-items-center" id="blogss">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"><i class="bi bi-pen-fill"></i> Blogs</h3>
                            </div>
                            <div class="card-footer text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Header</h5>
                                </div>
                                <div class="card-body" style="text-align: justify;">
                                    <h4 class="card-title">This is Title</h4>
                                    <p> Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna 
                                        aliqua. Ut enim ad minim veniam, quis 
                                        nostrud exercitation ullamco laboris nisi ut 
                                        aliquip ex ea commodo consequat.
                                    </p>
                                    <a href="" class="btn btn-dark"><i class="bi bi-book"></i> Continue Reading...</a>
                                </div>
                                <div class="card-footer text-center">
                                    <p class="text-muted" style="font-size: 14px;">2 hours ago</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Header</h5>
                                </div>
                                <div class="card-body" style="text-align: justify;">
                                    <h4 class="card-title">This is Title</h4>
                                    <p> Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna 
                                        aliqua. Ut enim ad minim veniam, quis 
                                        nostrud exercitation ullamco laboris nisi ut 
                                        aliquip ex ea commodo consequat.
                                    </p>
                                    <a href="" class="btn btn-dark"><i class="bi bi-book"></i> Continue Reading...</a>
                                </div>
                                <div class="card-footer text-center">
                                    <p class="text-muted" style="font-size: 14px;">2 hours ago</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Header</h5>
                                </div>
                                <div class="card-body" style="text-align: justify;">
                                    <h4 class="card-title">This is Title</h4>
                                    <p> Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit, sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna 
                                        aliqua. Ut enim ad minim veniam, quis 
                                        nostrud exercitation ullamco laboris nisi ut 
                                        aliquip ex ea commodo consequat.
                                    </p>
                                    <a href="" class="btn btn-dark"><i class="bi bi-book"></i> Continue Reading...</a>
                                </div>
                                <div class="card-footer text-center">
                                    <p class="text-muted" style="font-size: 14px;">2 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href="" class="link-dark">Read more blogs...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact d-flex align-items-center" id="contacts">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="card-title fw-bold"><i class="bi bi-person-lines-fill"></i> Contact</h3>
                            </div>
                            <div class="card-footer text-muted">
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
                                        <div class="col-6 border d-flex justify-content-center align-items-center">
                                            <img src="image/facebook.png" width="150px" style="margin: 30px 0;" alt="">
                                        </div>
                                        <div class="col-6 border d-flex justify-content-center align-items-center">
                                            <img src="image/linked-in.png" width="150px" style="margin: 30px 0;" alt="">
                                        </div>
                                    </div>
                                    <div class="row h-100">
                                        <div class="col-6 border d-flex justify-content-center align-items-center">
                                            <img src="image/Github.png" width="150px" style="margin: 30px 0;" alt="">
                                        </div>
                                        <div class="col-6 border d-flex justify-content-center align-items-center">
                                            <img src="image/Email.png" width="150px" style="margin: 30px 0;" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="fw-bold"><i class="bi bi-chat-dots-fill"></i> Get in touch</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-2">
                                            <label for="name" class="form-label"><i class="bi bi-person"></i> Name</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="mb-2">
                                            <label for="email" class="form-label"><i class="bi bi-envelope-at"></i> Email</label>
                                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message" class="form-label"><i class="bi bi-chat-dots"></i> Message</label>
                                            <textarea class="form-control" id="message" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-dark" style="width: 100%;"><i class="bi bi-send"></i> Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-dark text-light d-flex justify-content-center align-items-center">
        <p>© Juriel Comia. All Rights Reserved</p>
    </footer>
</body>
</html>