<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>colo shop</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<?php

    $link = mysqli_connect('mysql', 'root', 'password', 'web', "3306") or die ("Khong the ket noi den CSDL MYSQL");

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM `categories` WHERE id=$id;";
   
    // 3. Thực thi câu truy vấn SQL để lấy về dữ liệu ban đầu của record cần update
    $resultSelect = mysqli_query($link, $sqlSelect);
    var_dump($resultSelect); die;
    $categories = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC); // 1 record
 
    if(empty($categories)) {
        echo "Giá trị id: $id không tồn tại. Vui lòng kiểm tra lại.";
        die;
    }
    ?>
    
    <!-- Main content -->
    <div class="container">
        <h1>Sửa danh mục</h1>

        <form name="frmCreate" method="post" action="" class="form">
            <table class="table">
                <tr>
                    <td>Mã danh mục</td>
                    <td><input type="text" name="id" id="id" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Tên danh mục</td>
                    <td><input type="text" name="name" id="name" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Danh mục </td>
                    <td><input type="text" name="parent_id" id="parent_id" class="form-control" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Lưu dữ liệu</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php

    $link = mysqli_connect('mysql', 'root', 'password', 'web', "3306") or die ("Khong the ket noi den CSDL MYSQL");


    if ( isset($_POST['btnSave']) ) {
        

        $id = $_POST['id'];
        $name = $_POST['name'];
        $parent_id = $_POST['parent_id'];

        $errors = [];

        $sql = "UPDATE categories SET id='$id', name='$name', parent_id='$parent_id' WHERE id=$id;";


       // var_dump($sql); die;


        mysqli_query($link, $sql);

        mysqli_close($link);

        header('location:danhsach.php');   
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>

</html>
</body>

</html>

