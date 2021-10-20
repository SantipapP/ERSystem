<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: admin_login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="mheader">
        <h2 class="text-center">ยินดีต้อนรับคุณ : <?php echo $_SESSION['username'];?> </h2>
    </div>
    <div class="content">
        <button onClick = location="em_list.php" class="btn">ตรวจสอบผู้สมัคร์</button> |
        <button onClick = location="register_admin.php" class="btn">ลงทะเบียนเจ้าหน้าที่</button> |
        <button onClick = location="admin_list.php" class="btn">รายชื่อเจ้าหน้าที่</button>
    </div>
</body>
</html>