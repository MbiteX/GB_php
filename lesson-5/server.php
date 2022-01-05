<?php
include_once "config.php";
$action = $_GET['action'];
$id = $_GET['id'];
$path = "images/".$_FILES['photo']['name'];
if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)){
    $sql = "INSERT INTO `img` (`photo`, `name`, `size`) VALUES ('{$_FILES['photo']['name']}', '{$_FILES['photo']['name']}', '{$_FILES['photo']['size']}');";
    if(mysqli_query($connect, $sql)){
        header("Location:admin");
    }
    echo $_FILES['photo']['name']." успешно загружен!";

}
// print_r($_FILES);


if($action == "delete"){
    $sql = "DELETE from img where id=$id";
    if(mysqli_query($connect, $sql)){
        header("Location:admin");
    }
}


?>