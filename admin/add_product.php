<?php
include_once '../config/config.php';


if ($_SESSION['role'] == 1) {

    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM goods WHERE id={$id}";
        $result = mysqli_query($connect, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            $h2 = 'Редактирование товара';
        }
    }
?>


<div>
    <div style="margin: 32px auto; width:min-content">
        <h2 class="shop-cart__card-name"><?= $h2 ?? 'Добавить товар' ?></h2>
        <form action="../models/good.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
            <p>Название:</p>
            <input type="text" required name="name" style="margin-bottom: 16px; width: 300px"
                value="<?= $row['name'] ?>">
            <p>Цена:</p>
            <input type="text" required name="price" style="margin-bottom: 16px; width: 300px"
                value="<?= $row['price'] ?>">
            <p>Цвет:</p>
            <input type="text" required name="color" style="margin-bottom: 16px; width: 300px"
                value="<?= $row['color'] ?>">
            <p>Размер:</p>
            <input type="text" required name="size" style="margin-bottom: 16px; width: 300px"
                value="<?= $row['size'] ?>">
            <p>Описание:</p>
            <textarea style="margin-bottom: 16px; width: 300px; height: 132px; " required
                name="description"><?= $row['description'] ?></textarea>
            <br>

            <?php if ($_GET['id']) { ?>
            <button type="submit">СОХРАНИТЬ</button>
            <img src="../public/img/<?= $row['img'] ?>" width='300px'>
            <?php
                } else { ?>
            <input type="file" required name='img' accept="image/*">
            <button type="submit">ДОБАВИТЬ</button>
            <?php } ?>
        </form>
    </div>
</div>


<?php
} else {
    header("Location: ../public");
}
?>