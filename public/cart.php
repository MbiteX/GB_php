<?php
include_once '../config/config.php';
$title = 'Корзина shop';

include_once 'templates/head.php';
?>

<body>

    <?php
    include_once 'templates/header.php'
    ?>

    <div class="title">
        <div class="container title_wrap">
            <div class="title_name">
                <h1>SHOPPING CART</h1>
            </div>
        </div>
    </div>

    <main class="container shop-cart">
        <section class="shop-cart__card">
            <?php
            if ($_SESSION['id_user']) {

                $id_user = $_SESSION['id_user'];
                $sql = "SELECT * from basket where user_id=$id_user and user_id = {$_SESSION['id_user']} and status = 1";
                $res = mysqli_query($connect, $sql);
                while ($data = mysqli_fetch_assoc($res)) {
            ?>
            <div class="shop-cart__card-item">
                <img src="img/<?= $data['img'] ?>" alt="photo" width="260" height="300">
                <div>
                    <h2 class="shop-cart__card-name"><?= $data['name'] ?></h2>
                    <p>Цена: <span>&#8381 <?= $data['price'] ?></span></p>
                    <p>Цвет: <?= $data['color'] ?></p>
                    <p>Размер: <?= $data['size'] ?></p>
                    <a class="shop-cart_del" href="../models/basket.php?id=<?= $data['id'] ?>&active=del"
                        style="position: absolute; top: 6px; right: 22px;">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.2453 9L17.5302 2.71516C17.8285 2.41741 17.9962 2.01336 17.9966 1.59191C17.997 1.17045 17.8299 0.76611 17.5322 0.467833C17.2344 0.169555 16.8304 0.00177586 16.4089 0.00140366C15.9875 0.00103146 15.5831 0.168097 15.2848 0.465848L9 6.75069L2.71516 0.465848C2.41688 0.167571 2.01233 0 1.5905 0C1.16868 0 0.764125 0.167571 0.465848 0.465848C0.167571 0.764125 0 1.16868 0 1.5905C0 2.01233 0.167571 2.41688 0.465848 2.71516L6.75069 9L0.465848 15.2848C0.167571 15.5831 0 15.9877 0 16.4095C0 16.8313 0.167571 17.2359 0.465848 17.5342C0.764125 17.8324 1.16868 18 1.5905 18C2.01233 18 2.41688 17.8324 2.71516 17.5342L9 11.2493L15.2848 17.5342C15.5831 17.8324 15.9877 18 16.4095 18C16.8313 18 17.2359 17.8324 17.5342 17.5342C17.8324 17.2359 18 16.8313 18 16.4095C18 15.9877 17.8324 15.5831 17.5342 15.2848L11.2453 9Z"
                                fill="#575757" />
                        </svg></a>
                </div>
            </div>
            <?php
                };
                ?>

            <!-- <div class="shop-cart__card-item">
                <img src="img/card6.png" alt="photo" width="260" height="300">
                <div>
                    <h2 class="shop-cart__card-name">MANGO PEOPLE T-SHIRT</h2>
                    <p>Price: <span>$300</span></p>
                    <p>Color: Red</p>
                    <p>Size: Xl</p>
                    <div class="box-card-wrap">
                        <p>Quantity:</p>
                        <input class="shop-cart__card-item_sht" type="number" placeholder="шт">
                    </div>
                    <button type="submit"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.2453 9L17.5302 2.71516C17.8285 2.41741 17.9962 2.01336 17.9966 1.59191C17.997 1.17045 17.8299 0.76611 17.5322 0.467833C17.2344 0.169555 16.8304 0.00177586 16.4089 0.00140366C15.9875 0.00103146 15.5831 0.168097 15.2848 0.465848L9 6.75069L2.71516 0.465848C2.41688 0.167571 2.01233 0 1.5905 0C1.16868 0 0.764125 0.167571 0.465848 0.465848C0.167571 0.764125 0 1.16868 0 1.5905C0 2.01233 0.167571 2.41688 0.465848 2.71516L6.75069 9L0.465848 15.2848C0.167571 15.5831 0 15.9877 0 16.4095C0 16.8313 0.167571 17.2359 0.465848 17.5342C0.764125 17.8324 1.16868 18 1.5905 18C2.01233 18 2.41688 17.8324 2.71516 17.5342L9 11.2493L15.2848 17.5342C15.5831 17.8324 15.9877 18 16.4095 18C16.8313 18 17.2359 17.8324 17.5342 17.5342C17.8324 17.2359 18 16.8313 18 16.4095C18 15.9877 17.8324 15.5831 17.5342 15.2848L11.2453 9Z"
                                fill="#575757" />
                        </svg></button>
                </div>
            </div> -->

            <div class="box-wrap">
                <a href="../models/basket.php?active=clear" class="link shop-cart__card-btm">Очистить корзину</a>
                <a href="catalog.php" class="link shop-cart__card-btm">Продолжить покупки</a>
            </div>
        </section>

        <section class="shop-cart__form">
            <form action="../models/basket.php?active=buy" method="POST">
                <!-- <div class="shop-cart__form-adress">
                    <h3 class="shop-cart__form-title">SHIPPING ADRESS</h3>
                    <input type="text" placeholder="Bangladesh">
                    <input type="text" placeholder="State">
                    <input type="text" placeholder="Postcode / Zip">
                    <button type="submit">GET A QUOTE</button>
                </div> -->

                <div class="shop-cart__form-total">
                    <p>SUB TOTAL $</p>
                    <p class="shop-cart__form-total-grand">GRAND TOTAL <span>$</span></p>
                    <hr>
                    <button type="submit">Оформить покупку</button>
                </div>
            </form>
            <?php
            } else {
        ?>

            <h2 style="margin-bottom: 80px;">АВТОРИЗУЙТЕСЬ!!</h2>

            <?php
            } ?>
        </section>
    </main>

    <div class="feetback">
        <div class="container subscrabe_wrap">
            <div class="comment">
                <img src="img/ava_comment.png" alt="avatar">
                <p>“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum“</p>
            </div>

            <div class="subscribe">
                <p><span>SUBSCRIBE</span> <br> FOR OUR NEWLETTER AND PROMOTION</p>

                <form class="subscribe_form">
                    <input type="email" class="email" minlength="4" maxlength="32" placeholder="Enter Your Email">
                    <input type="submit" class="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>


    <?php
    include_once 'templates/footer.php'
    ?>