<?php 
session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>login</title>
</head>
<body>
    <div class="container">
    <h1 style="text-align: center;">Server Bull VPN</h1>
    <?php include "nav.php"; ?>
    <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card text-dark bg-light">
                <div class="card-header">เข้าสู่ระบบ</div>
                <div class="card-body">
                    <form action="verify.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="login">Login:</label>
                            <input type="text" name="login" class="form-control mt-1">
                        </div>
                        <div class="form-group mb-3">
                            <label for="pwd">Password:</label>
                            <input type="text" name="pwd" class="form-control mt-1">
                        </div>
                        <center><button class="btn btn-secondary">Login</button></center>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <br>
    <div align="center">
        <p style="text-align: center;">ถ้ายังไม่ได้เป็นสมาชิก 
        <a href="register.php">กรุณาสมัครสมาชิก</a></p>
    </div>
    
    </div>
</body>
</html>