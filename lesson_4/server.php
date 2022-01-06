<?php
$path = "images/".$_FILES['photo']['name'];
if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)){
    echo $_FILES['photo']['name']." успешно загружен!";
    // echo "<br><a href=\"scan.php\">Галееря</a>";

}
//print_r($_FILES);
?>
<br>
<a href="<?= $_SERVER['HTTP_REFERER'] ?>">Готово</a>