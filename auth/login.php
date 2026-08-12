<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Aplikasi Peminjaman Alat</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Aplikasi Peminjaman Alat</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center mb-4">Login Sistem</h5>
                        <?php
                        if (isset($_SESSION['pesan'])) {
                        ?>
                            <div class="alert alert-danger">
                                <?= $_SESSION['pesan'] ?>
                            </div>
                            <?php
                            unset($_SESSION['pesan']);
                        }
                        ?>
                        <form action="proses_login.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center"><small>FiogilangCode</small></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
