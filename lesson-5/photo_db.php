<?php
$sql = "select * from img";
$res = mysqli_query($connect, $sql);

while($data = mysqli_fetch_assoc($res)){
    // echo "фотто {$data['name']} весит {$data['size']}";
    ?>

<a href="fullImage.php?img=<?= $data['photo']?>"><img width="150" src="images/<?= $data['photo']?>"
        alt="<?= $data['name']?>"></a>


<?php
};