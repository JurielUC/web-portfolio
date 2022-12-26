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
        <section>
            <div class="container d-flex justify-content-center align-items-center" style="height: 90vh;">
                <div class="card h-75 w-50 border">
                    <div class="card-header">
                        <h4 class="fw-bold"><i class="bi bi-box-arrow-in-right"></i> Login Here</h4>
                    </div>
                    <div class="card-body h-100 d-flex justify-content-center align-items-center">
                        <form>
                            <div class="mb-2">
                                <label for="email" class="form-label"><i class="bi bi-envelope-at"></i> Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-2">
                                <label for="password" class="form-label"><i class="bi bi-person"></i> Password</label>
                                <div class="input-group">
                                    <input type="password" style="width: 85%;" class="form-control" id="password">
                                    <input type="checkbox" style="width: 15%;" class="form-control" name="" id="">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark" style="width: 100%;">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>