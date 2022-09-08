<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">
        Webboard Post
    </h1>
    <div style="text-align: center;">
        <?php echo "ต้องการดูกระทู้ " . $_GET["id"];?>
        <br>
        <?php
            if($_GET["id"]%2 == 0){
                echo "เป็นกระทู้หมายเลขคู่";
            } else {
                echo "คี่";
            }
        ?>
    </div>
    <table style="border: 2px solid black; width: 30%" align="center">
            <tr><td colspan="2" style="background-color: #6CD;">แสดงความคิดเห็น</td></tr>
            <tr><td><textarea style="width: 100%;" name="text12"></textarea></td></tr>
            <tr><td colspan="2" style="text-align: center;"><input type="submit" value="ส่งข้อความ"></td></tr>
    </table>
    <div style="text-align: center;">
        <p><a href="index.php">กลับไปที่หน้าหลัก</a></p>
    </div>
</body>
</html>