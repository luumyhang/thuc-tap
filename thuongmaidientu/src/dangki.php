<?php
$link = mysqli_connect('mysql', 'root', 'password', 'web', "3306") or die ("Khong the ket noi den CSDL MYSQL");

if (isset($_POST['dangkiBtn'])) {
    if(empty($_POST['username']) or empty($_POST['email']) or empty($_POST['password'])){
        echo "<p style='color:red'>Vui lòng không để trống</p><a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    } else {
        $username = $_POST['username'];
        $email = $_POST ['email'];
        $password = $_POST['password'];
    }

    $sql = "SELECT * FROM users WHERE username='$username'";

    $result = mysqli_query($link, $sql);
    
    if (mysqli_num_rows($result) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        die();
    } else{
        $sql= "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
        if ($link->query($sql) === TRUE) {
            header("location:dangnhap.php");
        } else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/log.css">
    <link rel="stylesheet" href="./css/fontawesome-free-6.1.0-web/css/all.min.css">   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,300;0,400;0,500;1,300&display=swap&subset=vietnamese"><title>Document</title>
</head>
<body>
    <div class="log-form">
        <form action="dangki.php" method="post">
            <div class="main">
                <h1>Đăng Ký</h1>
            </div>

            <div class="form-in">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Tên đăng nhập" name="username">
            </div>
            <div class="form-in">
                <i class="fa-solid fa-user"></i>
                <input type="email" placeholder="email" name="email">
            </div>
            <div class="form-in">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Mật Khẩu" name="password">
            </div>
            <div class="btn">
                <button name="dangkiBtn">Đăng Ký</button>
                <button><a href="index.php">Trở lại</a></button>
            </div>
        </form>
    </div>    
</body>
</html>
