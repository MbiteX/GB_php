<div class="container">
    <h2 style="margin: 20px 0;text-align: center">Заказанные товары:</h2>
</div>
<div class="container subscrabe_wrap">
    <?php
    $id_user = $_SESSION['id_user'];
    $sql = "SELECT * from basket where user_id=$id_user and user_id = {$_SESSION['id_user']} and status = 2";
    $res = mysqli_query($connect, $sql);
    while ($data = mysqli_fetch_assoc($res)) {
    ?>
    <div class="shop-cart__card-item">
        <img src="img/<?= $data['img'] ?>" alt="photo" width="260" height="300">
        <div>
            <a href="product.php?id=<?= $data['good_id'] ?>" class="link">
                <h2 class="shop-cart__card-name"><?= $data['name'] ?></h2>
            </a>
            <p>Цена: <span>&#8381 <?= $data['price'] ?></span></p>
            <p>Цвет: <?= $data['color'] ?></p>
            <p>Размер: <?= $data['size'] ?></p>
            <p>Кол-во: <?= $data['count'] ?> шт</p>
        </div>
    </div>
    <?php
    }; ?>
</div>