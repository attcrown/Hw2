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
    <title>verify</title>
</head>
<body>
    <h1 style="text-align: center;">
        Webboard Login
    </h1>
    <hr>
    <hr>
    <div align="center">
        <?php 
            if($_POST["login"] == "admin" && $_POST["pwd"] == "ad1234"){
                echo "ยินดีต้อนรับคุณ ADMIN";
                $_SESSION['username'] = 'admin';
                $_SESSION['role'] = 'a';
                $_SESSION['id'] = session_id();
            }
            elseif($_POST["login"] == "member" && $_POST["pwd"] == "mem1234"){
                echo "ยินดีต้อนรับคุณ MEMBER";
                $_SESSION['username'] = 'member';
                $_SESSION['role'] = 'm';
                $_SESSION['id'] = session_id();
            }
            else
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        ?>
    </div>
    <p align="center">
        <a href="index.php">กลับไปยังหน้าหลัก</a>
    </p>
    <!--<div align="center">
        เข้าสู่ระบบด้วย 
        <br>
        Login = <?php echo $_POST["login"];?>
        <br>
        Passwrod = <?php echo $_POST["pwd"]?>
    </div>-->

</body>
</html>