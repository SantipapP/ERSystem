<?php
    require('connect.php');

    $username = $_POST["adusername"];
    $pass = $_POST["adpassword"];
    $fname = $_POST["adfname"];
    $lname = $_POST["adlname"];
    $rank = $_POST["adrank"];
    //$series = $_POST["p_series"];


    // echo $pname;
    // echo $birthdate;
    // echo $gender;
    // echo $species;
    // echo $geneticType;
    // echo $occupation;

    $sql = "INSERT INTO tbl_admin(username,pass,fname,lname,rank,status) VALUE ('$username','$pass','$fname','$lname','$rank','Active')";

    $result = mysqli_query($connect,$sql);

    if($result){
        echo '<script language="javascript">';
        echo 'alert("บันทึกข้อมูลสำเร็จ")';
        echo '</script>';
    }else{
        echo mysqli_error($connect);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="mheader">
    <a href="admin_login.php"><h2>กลับหน้าหลัก</h2></a>
    </div>
</body>
</html>