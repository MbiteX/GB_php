<?php
$files = scandir("images");
//print_r($files);
for($i=2;$i < count($files);$i++){?>
<a href="fullImage.php?img=<?= $files[$i]?>"><img width="100" src="images/<?= $files[$i]?>" alt=""></a>
<?php
}