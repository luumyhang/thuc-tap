<?php
$link = mysqli_connect('mysql', 'root', 'password', 'web', "3306") or die ("Khong the ket noi den CSDL MYSQL");

$id = $_GET['id'];
$sql = "DELETE FROM `products` WHERE id=$id;";

$result = mysqli_query($link, $sql);

mysqli_close($link);

header('location:list.php');