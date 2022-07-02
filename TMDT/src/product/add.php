<?php

$link = mysqli_connect('mysql', 'root', 'password', 'web', "3306") or die ("Khong the ket noi den CSDL MYSQL");
$sql_categories = "SELECT * FROM categories ";
$query_categories = mysqli_query($link, $sql_categories);

if ( isset($_POST['btnSave']) ) {
    
    // 3. Nếu người dùng có bấm nút `Lưu dữ liệu` thì thực thi câu lệnh INSERT
    // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $img = $_POST['img'];


    // 4. Kiểm tra ràng buộc dữ liệu (Validation)
    // Tạo biến lỗi để chứa thông báo lỗi
    $errors = [];


    // 6. Nếu không có lỗi dữ liệu sẽ thực thi câu lệnh SQL
    // Câu lệnh INSERT
    $sqlInsert = "INSERT INTO products (id, name, price, description, deleted_at, category_id, img) VALUES ('$id', '$name', '$price', '$description', '$deleted_at', '$category_id','$img')";

    // Code dùng cho DEBUG
    //var_dump($sqlInsert); die;

    // Thực thi INSERT
    mysqli_query($link, $sqlInsert);
    var_dump($sqlInsert); die;
    // Đóng kết nối
    mysqli_close($link);
    // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
    header('location:list.php');   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>colo shop</title>

    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <!-- Main content -->
    <div class="container">
        <h1>Thêm sản phẩm</h1>

        <form name="frmCreate" method="post" action="" class="form">
            <table class="table">
                <tr>
                    <td>Mã sản phẩm</td>
                    <td><input type="text" name="id" id="id" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type="text" name="name" id="name" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Giá</td>
                    <td><input type="text" name="description" id="description" class="form-control" /></td>

                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td><textarea name="price" id="price" class="form-control"></textarea></td>

                </tr>

                <tr>
                <div class="form-group">
                        <label>Chuyên mục</label>
                        <select name="id" class="form-control select2">
                </div>
                            <option> 1</option>
                        </select>
                    </div>
               </tr>

                <tr>
                    <td>Ảnh</td>
                    <td><input type="file" name="img" id="img" class="form-control" /></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Lưu dữ liệu</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    

    <!-- Liên kết JS Jquery bằng CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <!-- Liên kết JS Popper bằng CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Liên kết JS Bootstrap bằng CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Liên kết JS FontAwesome bằng CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>

</html>
</body>

</html>

