<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Deteksi Kerusakan Motor - SI Pakar</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="user/html/assets/images/favicon.ico" />
    <link rel="stylesheet" href="user/html/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="user/html/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="user/html/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="user/html/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="user/html/assets/vendor/remixicon/fonts/remixicon.css">
</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="container">
                <div class="row align-items-center justify-content-center height-self-center">
                    <div class="col-lg-8">
                        <div class="card auth-card">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center auth-content">
                                    <div class="col-lg-7 align-self-center">
                                        <div class="p-3">
                                            <h2 class="mb-2">Halaman Login</h2>
                                            <p>Silahkan masukkan username dan password Anda!</p>
                                            <form action="/loginAdmin" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input required autofocus class="floating-input form-control" type="text" placeholder=" " name="username">
                                                            <label>Username</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input required class="floating-input form-control" type="password" placeholder=" " name="password">
                                                            <label>Password</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Sign In</button>
                                                <a href="/" class="btn btn-warning">Kembali ke Halaman Utama</a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 content-right">
                                        <img src="user/html/assets/images/login/01.png" class="img-fluid image-right" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Backend Bundle JavaScript -->
    <script src="user/html/assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="user/html/assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="user/html/assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="user/html/assets/js/chart-custom.js"></script>

    <!-- app JavaScript -->
    <script src="user/html/assets/js/app.js"></script>
</body>

</html>