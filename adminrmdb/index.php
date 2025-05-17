<?php
session_start();
// Check if the form has been submitted using POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Example credentials (replace with your actual validation logic or database check)
    $valid_email = "adminmail@gmail.com";
    $valid_pass = "12345";

    echo $email;
    echo $password;
    // Validate credentials
    if ($email === $valid_email && $password === $valid_pass) {
        // Store session for admin user
        $_SESSION['admin'] = $email;
        header("Location: adminrmdb/admin-dashboard.php"); // Redirect to admin dashboard
        exit();
    } else {
        // Show error message if login fails
        session_destroy();
        $_POST = array();
        header("Refresh:0");
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>RMDB - Review Movies DataBase</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
            crossorigin="anonymous"
        >
        <style>
            .movie {
                margin-bottom: 20px;
            }
            .movie img {
                width: 200px;
            }
        </style>
    </head>

    <body class="h-100">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">RMDB</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/kategoriler.php">Kategoriler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Popüler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Yeni Çıkanlar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kategoriler</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a class="btn btn-outline-light" href="/kayit-ol.php">Kayıt Ol</a>
                    </form>
                    </div>
                </div>
            </nav>
        </header>
    
        <main>
            <div class="container-fluid d-flex justify-content-center mt-5">
                <form class="bg-dark text-light p-3 rounded w-25" method="post" autocomplete="off" action="">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">E-Posta</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Şifre</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-50">Giriş</button>
                    </div>
                </form>
            </div>
        </main>

        <footer>

        </footer>
    

        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" 
            crossorigin="anonymous">
        </script>

        <script src="script.js" type="text/Javascript"></script>
    </body>
</html>
