<style>
table {
    margin: 0 auto;
    border: 1px solid gray;
    text-align: center;
    width: 800px;
}

td {
    border: 1px solid gray;
}
</style>

<?php
include_once "../config.php";
$sql = "select * from img";
$res = mysqli_query($connect, $sql);
include "../form.html";
?>

<table>
    <tr>
        <th>фото</th>
        <th>имя</th>
        <th>вес</th>
        <th>дата создания</th>
        <th>действие</th>
    </tr>

    <?php
while($data = mysqli_fetch_assoc($res)){
    ?>

    <tr>
        <td>
            <a href="../fullImage.php?img=<?= $data['photo']?>"><img width="100" src="../images/<?= $data['photo']?>"
                    alt="<?= $data['id']?>"></a>
        </td>
        <td>
            <?= $data['name']?>
        </td>
        <td>
            <?= $data['size']?>
        </td>
        <td>
            <?= $data['date']?>
        </td>
        <td>
            <a
                href="../server.php?photo=<?= $data['photo']?>&id=<?= $data['id']?>&action=delete"><button>Удалить</button></a>
        </td>
    </tr>

    <?php
};