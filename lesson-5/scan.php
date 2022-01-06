<?php
$files = scandir("images");
//print_r($files);
for($i=2;$i < count($files);$i++){?>
    <a href="fullImage.php?img=<?= $files[$i]?>"><img width="200" src="images/<?= $files[$i]?>" alt=""></a><hr>
<?php
}