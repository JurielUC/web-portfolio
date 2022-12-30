<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My Website</title>
    <link rel="shortcut icon" href="image/tab-img.png" type="image/x-icon">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="custom-style/style.css?v=<?php echo time(); ?>">
    <script defer src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script defer src="js/active-nav.js"></script>
    <script defer src="js/fade-in.js"></script>
    <script defer src="js/show-pass.js"></script>
    <script defer src="js/disable-back.js"></script>
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
<body>
    <header class="container-fluid bg-dark sticky-top" style="height: 70px;">
        <div class="navi row container-fluid h-100 text-white d-flex align-items-center">
            <div class="col-12">
                <h3 class="head-name ms-4 fw-bold"><i class="bi bi-code-slash"></i> My Website</h3>
            </div>
        </div>
    </header>
    <div class="container-fluid divider" style="height: 15px"></div>
    <main>
        <section class="login-sec">
            <div class="container d-flex justify-content-center align-items-center" style="height: 91vh;">
                <div class="card w-25 border" style="height: 320px">
                    <div class="card-header">
                        <h5 class="fw-bold"><i class="bi bi-box-arrow-in-right"></i> Login Here</h5>
                    </div>
                    <div class="card-body h-100 d-flex justify-content-center align-items-center">
                        <form action="php/login-con.php" method="POST">
                            <div class="mb-2">
                                <label for="email" class="form-label"><i class="bi bi-envelope-at"></i> Email</label>
                                <input type="email" name="email" class="form-control" style="font-size: .8rem" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-2">
                                <label for="password" class="form-label"><i class="bi bi-lock"></i> Password</label>
                                <div class="input-group">
                                    <input type="password" style="width: 85%; font-size: .8rem;" name="password" class="form-control" id="password" autocomplete="off">
                                    <span class="input-group-text form-control-sm d-flex justify-content-center align-items-center" style="width: 15%;">
                                        <i class="bi bi-eye" id="togglePassword" style="cursor: pointer"></i></i>
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark" style="width: 100%;">Login</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p style="font-size: .7rem" class="text-danger text-center"><?php if(!empty($_GET['message'])) {
                                $message = $_GET['message'];
                                echo $message; }?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>