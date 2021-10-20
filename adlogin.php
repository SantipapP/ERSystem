<?php
    session_start();
    include('connect.php');

    $username = $_POST['adusername'];
    $password = $_POST['adpassword'];



    $sql = "SELECT * FROM tbl_admin WHERE username = '$username' AND pass = '$password' ";
    $result =mysqli_query($connect,$sql);

    if (mysqli_num_rows($result) == 1){
        $_SESSION['username'] = $username;
        header("location: admin_menu.php");
    }else{
        echo "รหัสผิดไอ้โง่";
    }

?>