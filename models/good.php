<?php
include_once '../config/config.php';

$id = $_GET['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$color = $_POST['color'];
$size = $_POST['size'];


if (!$_GET['id']) {
    $path = "../public/img/" . $_FILES['img']['name'];
    if (move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
        $sql = "INSERT INTO `goods` (`name`, `description`, `price`, `color`, `size`, `img`)
        VALUES ('{$name}','{$description}','{$price}','{$color}','{$size}','{$_FILES['img']['name']}');";
        $res = mysqli_query($connect, $sql);
        print_r($connect);
        if ($res) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        };
        echo $_FILES['img']['name'] . " успешно загружен!";
    }
} else {
    $sql_add = "UPDATE `goods` SET `name` = '{$name}' , `price` = '{$price}' , `description` = '{$description}' , `color` = '{$color}' , `size` = '{$size}' WHERE `goods`.`id` = '{$id}'";
    $res_add = mysqli_query($connect, $sql_add);
    // print_r($connect);
    if ($res_add) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        echo " успешно!";
    };
}