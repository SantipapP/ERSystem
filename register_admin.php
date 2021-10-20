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
        <h2 class="text-center">ลงทะเบียนเจ้าหน้าที่</h2>
    </div>
    <form action="insert_admin.php" method="POST" class="content">
    <div class="input-group">
        <label for="">ชื่อผู้ใช้งาน</label>
        <input type="text" name="adusername">
    </div>
    <div class="input-group">
        <label for="">รหัสผ่าน</label>
        <input type="password" name="adpassword">
    </div>
    <div class="input-group">
        <label for="">ชื่อเจ้าหน้าที่</label>
        <input type="text" name="adfname">
    </div>
    <div class="input-group">
        <label for="">นามสกุล</label>
        <input type="text" name="adfname">
    </div>
    <div class="input-group">
        <label for="">ตำแหน่ง</label>
        <select name="rank" id="">
            <option value="N/A">N/A</option>
            <option value="Human resouce">HR</option>
            <option value="IT">IT</option>
        </select>
    </div>
    <div class="input-group">
        <button type="submit" name="adlogin" class="btn">ลงทะเบียน</button>
        <button type="reset" name="resetF" class="rebtn">ล้างข้อมูล</button>
    </div>
    </form>
</body>
</html>