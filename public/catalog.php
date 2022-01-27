<?php
$title = 'Каталог shop';

include_once 'templates/head.php';
?>

<body>

    <?php
    include_once 'templates/header.php'
    ?>

    <div class="title">
        <div class="container title_wrap">
            <div class="title_name">
                <h1>NEW ARRIVALS </h1>
            </div>
            <div class="breadcrumbs">
                <p><a class="breadcrumbs-link" href="index.html">HOME</a> / <a class="breadcrumbs-link" href="#">MEN</a>
                    / <span class="breadcrumbs_red">NEW
                        ARRIVALS</span> </p>
            </div>
        </div>
    </div>


    <main class="container">
        <!-- <div class="main_wrap filter_margin">
            <div class="main_filter">
                <input class="main_filter__input-check" type="checkbox" id="check">
                <label class="main_filter__input-title" for="check"><span>FILTER</span><svg viewBox="0 0 15 10"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.833333 10H4.16667C4.625 10 5 9.625 5 9.16667C5 8.70833 4.625 8.33333 4.16667 8.33333H0.833333C0.375 8.33333 0 8.70833 0 9.16667C0 9.625 0.375 10 0.833333 10ZM0 0.833333C0 1.29167 0.375 1.66667 0.833333 1.66667H14.1667C14.625 1.66667 15 1.29167 15 0.833333C15 0.375 14.625 0 14.1667 0H0.833333C0.375 0 0 0.375 0 0.833333ZM0.833333 5.83333H9.16667C9.625 5.83333 10 5.45833 10 5C10 4.54167 9.625 4.16667 9.16667 4.16667H0.833333C0.375 4.16667 0 4.54167 0 5C0 5.45833 0.375 5.83333 0.833333 5.83333Z" />
                    </svg></label>
                <div class="main_filter__input-drop">
                    <details open>
                        <summary>CATEGORY</summary>

                        <ul class="main_filter__ul">
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Denim</a></li>
                            <li><a href="#">Hoodies & Sweatshirts</a></li>
                            <li><a href="#">Jackets & Coats</a></li>
                            <li><a href="#">Polos</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Sweaters & Knits</a></li>
                            <li><a href="#">T-Shirts</a></li>
                            <li><a href="#">Tanks</a></li>
                        </ul>
                    </details>

                    <details>
                        <summary>BRAND</summary>

                        <ul class="main_filter__ul">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Repellat consectetur, a doloribus et!</li>
                            <li>Minus at neque consequatur eum.</li>
                            <li>Ad, tenetur impedit eligendi ex?</li>
                            <li>Temporibus porro esse amet, necessitatibus.</li>
                            <li>Sit enim illum nobis, aliquam.</li>
                            <li>Dolores voluptas quod consequatur perspiciatis!</li>
                            <li>Saepe nam officiis, aspernatur vero?</li>
                            <li>Voluptates iure sunt nisi recusandae.</li>
                            <li>Dignissimos iusto ut, expedita ullam.</li>
                        </ul>
                    </details>

                    <details>
                        <summary>DESIGNER</summary>

                        <ul class="main_filter__ul">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Repellat consectetur, a doloribus et!</li>
                            <li>Minus at neque consequatur eum.</li>
                            <li>Ad, tenetur impedit eligendi ex?</li>
                            <li>Temporibus porro esse amet, necessitatibus.</li>
                            <li>Sit enim illum nobis, aliquam.</li>
                            <li>Dolores voluptas quod consequatur perspiciatis!</li>
                            <li>Saepe nam officiis, aspernatur vero?</li>
                            <li>Voluptates iure sunt nisi recusandae.</li>
                            <li>Dignissimos iusto ut, expedita ullam.</li>
                        </ul>
                    </details>
                </div>
                <p class="main_filter">FILTER</p>
            </div>

            <div class="main_wrap main_pop">
                <div>
                    <p class="popuplist">TRENDING NOW</p>
                </div>
                <div>
                    <p class="popuplist">SIZE</p>
                </div>
                <div>
                    <p class="popuplist">PRICE</p>
                </div>
            </div>
        </div> -->

        <div class="card">

            <?php
            $sql = "select * from goods limit 9";
            $res = mysqli_query($connect, $sql);
            while ($data = mysqli_fetch_assoc($res)) {
            ?>


                <div class="card_item">
                    <img src="img/<?= $data['img'] ?>" alt="<?= $data['id'] ?>">
                    <div class="overlay">
                        <?php
                        if ($_SESSION['id_user']) {
                        ?>
                            <a href="../models/basket.php?id=<?= $data['id'] ?>&active=add" class="link card__btn"><svg width="27" height="25" viewBox="0 0 27 25" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.49847 22.185C5.50635 21.752 5.64091 21.3309 5.88519 20.9748C6.12947 20.6186 6.47261 20.3431 6.87158 20.1828C7.27055 20.0226 7.7076 19.9848 8.12781 20.0741C8.54802 20.1635 8.93269 20.376 9.23358 20.685C9.53447 20.994 9.73817 21.3857 9.81909 21.811C9.90002 22.2363 9.85453 22.6763 9.68842 23.0756C9.52231 23.475 9.24296 23.8161 8.88538 24.0559C8.52779 24.2957 8.10791 24.4237 7.67847 24.4237C7.38955 24.4211 7.10399 24.3611 6.83807 24.2472C6.57216 24.1333 6.3311 23.9676 6.12866 23.7597C5.92623 23.5518 5.76639 23.3057 5.65826 23.0355C5.55013 22.7653 5.49584 22.4763 5.49847 22.185ZM21.3045 24.4237C20.8711 24.4303 20.4453 24.3087 20.0797 24.074C19.7141 23.8393 19.4247 23.5017 19.2471 23.103C19.0696 22.7042 19.0117 22.2618 19.0806 21.8303C19.1496 21.3988 19.3423 20.9971 19.6351 20.6748C19.9278 20.3524 20.3077 20.1236 20.728 20.0165C21.1482 19.9095 21.5903 19.929 21.9997 20.0724C22.4091 20.2159 22.7679 20.4771 23.0317 20.8238C23.2956 21.1706 23.453 21.5877 23.4845 22.0236C23.5269 22.6155 23.3369 23.2004 22.9555 23.6523C22.7706 23.8745 22.5436 24.0574 22.2877 24.1901C22.0319 24.3227 21.7524 24.4025 21.4655 24.4247L21.3045 24.4237ZM8.59351 17.4855C8.38116 17.4851 8.17488 17.414 8.00671 17.2833C7.83855 17.1525 7.71792 16.9694 7.66351 16.7624L3.73651 2.19527H0.978516C0.719001 2.19527 0.470064 2.09128 0.28656 1.90622C0.103056 1.72116 0 1.47018 0 1.20847C0 0.946764 0.103056 0.695782 0.28656 0.510726C0.470064 0.325669 0.719001 0.22168 0.978516 0.22168H4.45752C4.66982 0.222254 4.876 0.293463 5.04413 0.424184C5.21226 0.554905 5.33295 0.737883 5.38751 0.944787L9.31451 15.5119H20.0185L23.5765 7.12665H11.7185C11.459 7.12665 11.2101 7.02266 11.0266 6.83761C10.8431 6.65255 10.74 6.40157 10.74 6.13986C10.74 5.87815 10.8431 5.62717 11.0266 5.44211C11.2101 5.25705 11.459 5.15306 11.7185 5.15306H25.0535C25.2131 5.15352 25.3701 5.19451 25.5099 5.27223C25.6497 5.34995 25.7679 5.46195 25.8535 5.59784C25.9413 5.73569 25.9945 5.89303 26.0084 6.05627C26.0224 6.21951 25.9966 6.38368 25.9335 6.53465L21.5425 16.8935C21.469 17.0684 21.3462 17.2177 21.1895 17.3229C21.0327 17.4281 20.8488 17.4846 20.6605 17.4855H8.59351Z" />
                                </svg>Добавить в корзину</a>
                        <?php
                        } else {
                        ?>
                            <a href="registration.php?active=login" class="link card__btn"><svg width="27" height="25" viewBox="0 0 27 25" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.49847 22.185C5.50635 21.752 5.64091 21.3309 5.88519 20.9748C6.12947 20.6186 6.47261 20.3431 6.87158 20.1828C7.27055 20.0226 7.7076 19.9848 8.12781 20.0741C8.54802 20.1635 8.93269 20.376 9.23358 20.685C9.53447 20.994 9.73817 21.3857 9.81909 21.811C9.90002 22.2363 9.85453 22.6763 9.68842 23.0756C9.52231 23.475 9.24296 23.8161 8.88538 24.0559C8.52779 24.2957 8.10791 24.4237 7.67847 24.4237C7.38955 24.4211 7.10399 24.3611 6.83807 24.2472C6.57216 24.1333 6.3311 23.9676 6.12866 23.7597C5.92623 23.5518 5.76639 23.3057 5.65826 23.0355C5.55013 22.7653 5.49584 22.4763 5.49847 22.185ZM21.3045 24.4237C20.8711 24.4303 20.4453 24.3087 20.0797 24.074C19.7141 23.8393 19.4247 23.5017 19.2471 23.103C19.0696 22.7042 19.0117 22.2618 19.0806 21.8303C19.1496 21.3988 19.3423 20.9971 19.6351 20.6748C19.9278 20.3524 20.3077 20.1236 20.728 20.0165C21.1482 19.9095 21.5903 19.929 21.9997 20.0724C22.4091 20.2159 22.7679 20.4771 23.0317 20.8238C23.2956 21.1706 23.453 21.5877 23.4845 22.0236C23.5269 22.6155 23.3369 23.2004 22.9555 23.6523C22.7706 23.8745 22.5436 24.0574 22.2877 24.1901C22.0319 24.3227 21.7524 24.4025 21.4655 24.4247L21.3045 24.4237ZM8.59351 17.4855C8.38116 17.4851 8.17488 17.414 8.00671 17.2833C7.83855 17.1525 7.71792 16.9694 7.66351 16.7624L3.73651 2.19527H0.978516C0.719001 2.19527 0.470064 2.09128 0.28656 1.90622C0.103056 1.72116 0 1.47018 0 1.20847C0 0.946764 0.103056 0.695782 0.28656 0.510726C0.470064 0.325669 0.719001 0.22168 0.978516 0.22168H4.45752C4.66982 0.222254 4.876 0.293463 5.04413 0.424184C5.21226 0.554905 5.33295 0.737883 5.38751 0.944787L9.31451 15.5119H20.0185L23.5765 7.12665H11.7185C11.459 7.12665 11.2101 7.02266 11.0266 6.83761C10.8431 6.65255 10.74 6.40157 10.74 6.13986C10.74 5.87815 10.8431 5.62717 11.0266 5.44211C11.2101 5.25705 11.459 5.15306 11.7185 5.15306H25.0535C25.2131 5.15352 25.3701 5.19451 25.5099 5.27223C25.6497 5.34995 25.7679 5.46195 25.8535 5.59784C25.9413 5.73569 25.9945 5.89303 26.0084 6.05627C26.0224 6.21951 25.9966 6.38368 25.9335 6.53465L21.5425 16.8935C21.469 17.0684 21.3462 17.2177 21.1895 17.3229C21.0327 17.4281 20.8488 17.4846 20.6605 17.4855H8.59351Z" />
                                </svg>АВТОРИЗУЙТЕСЬ!!</a>
                        <?php
                        }
                        ?>
                    </div>
                    <h3 class="card_name"><?= $data['name'] ?></h3>
                    <p class="card_description"><?= substr($data['description'], 0, 100) ?>
                        <a href="product.php?id=<?= $data['id'] ?>" class="link">Подробнее...</a>
                    </p>
                    <p class="card_price">$ <?= $data['price'] ?></p>
                </div>

            <?php
            }; ?>
            <!-- <div class="card_item">
                <img src="img/card1.png" alt="card">
                <div class="overlay">
                    <a href="product.html" class="link card__btn"><svg width="27" height="25" viewBox="0 0 27 25"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.49847 22.185C5.50635 21.752 5.64091 21.3309 5.88519 20.9748C6.12947 20.6186 6.47261 20.3431 6.87158 20.1828C7.27055 20.0226 7.7076 19.9848 8.12781 20.0741C8.54802 20.1635 8.93269 20.376 9.23358 20.685C9.53447 20.994 9.73817 21.3857 9.81909 21.811C9.90002 22.2363 9.85453 22.6763 9.68842 23.0756C9.52231 23.475 9.24296 23.8161 8.88538 24.0559C8.52779 24.2957 8.10791 24.4237 7.67847 24.4237C7.38955 24.4211 7.10399 24.3611 6.83807 24.2472C6.57216 24.1333 6.3311 23.9676 6.12866 23.7597C5.92623 23.5518 5.76639 23.3057 5.65826 23.0355C5.55013 22.7653 5.49584 22.4763 5.49847 22.185ZM21.3045 24.4237C20.8711 24.4303 20.4453 24.3087 20.0797 24.074C19.7141 23.8393 19.4247 23.5017 19.2471 23.103C19.0696 22.7042 19.0117 22.2618 19.0806 21.8303C19.1496 21.3988 19.3423 20.9971 19.6351 20.6748C19.9278 20.3524 20.3077 20.1236 20.728 20.0165C21.1482 19.9095 21.5903 19.929 21.9997 20.0724C22.4091 20.2159 22.7679 20.4771 23.0317 20.8238C23.2956 21.1706 23.453 21.5877 23.4845 22.0236C23.5269 22.6155 23.3369 23.2004 22.9555 23.6523C22.7706 23.8745 22.5436 24.0574 22.2877 24.1901C22.0319 24.3227 21.7524 24.4025 21.4655 24.4247L21.3045 24.4237ZM8.59351 17.4855C8.38116 17.4851 8.17488 17.414 8.00671 17.2833C7.83855 17.1525 7.71792 16.9694 7.66351 16.7624L3.73651 2.19527H0.978516C0.719001 2.19527 0.470064 2.09128 0.28656 1.90622C0.103056 1.72116 0 1.47018 0 1.20847C0 0.946764 0.103056 0.695782 0.28656 0.510726C0.470064 0.325669 0.719001 0.22168 0.978516 0.22168H4.45752C4.66982 0.222254 4.876 0.293463 5.04413 0.424184C5.21226 0.554905 5.33295 0.737883 5.38751 0.944787L9.31451 15.5119H20.0185L23.5765 7.12665H11.7185C11.459 7.12665 11.2101 7.02266 11.0266 6.83761C10.8431 6.65255 10.74 6.40157 10.74 6.13986C10.74 5.87815 10.8431 5.62717 11.0266 5.44211C11.2101 5.25705 11.459 5.15306 11.7185 5.15306H25.0535C25.2131 5.15352 25.3701 5.19451 25.5099 5.27223C25.6497 5.34995 25.7679 5.46195 25.8535 5.59784C25.9413 5.73569 25.9945 5.89303 26.0084 6.05627C26.0224 6.21951 25.9966 6.38368 25.9335 6.53465L21.5425 16.8935C21.469 17.0684 21.3462 17.2177 21.1895 17.3229C21.0327 17.4281 20.8488 17.4846 20.6605 17.4855H8.59351Z" />
                        </svg>Add to cart</a>
                </div>
                <h3 class="card_name">ELLERY X M'O CAPSULE</h3>
                <p class="card_description">Known for her sculptural takes on traditional tailoring, Australian
                    arbiter of cool Kym Ellery
                    teams up with Moda Operandi.
                </p>
                <p class="card_price">$ 52.00</p>
            </div> -->

        </div>

        <!-- <div class="pagina">
            <a href="#"><img src="img/icon/left.png" alt="<"></a>
            <a href="#" class="pagina_mr pagina_ml link">1</a>
            <p class="pagina_mr pagina_red">2</p> <a href="#" class="pagina_mr link">3</a>
            <a href="#" class="pagina_mr link">4</a> <a href="#" class="pagina_mr link">5</a> <a href="#"
                class="link">6</a>
            <p>.....</p> <a href="#" class="pagina_mr link">20</a>
            <a href="#"><img src="img/icon/right.png" alt=">"></a>
        </div> -->
    </main>


    <div class="advantage">
        <div class="container advantage_wrap">
            <div class="advantage_card">
                <img src="img/icon/delivery.png" alt="item">
                <h3>
                    Free Delivery
                </h3>
                <p>
                    Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.
                </p>
            </div>
            <div class="advantage_card">
                <img src="img/icon/sales.png" alt="item">
                <h3>
                    Sales & discounts
                </h3>
                <p>
                    Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.
                </p>
            </div>
            <div class="advantage_card">
                <img src="img/icon/quality.png" alt="item">
                <h3>
                    Quality assurance
                </h3>
                <p>
                    Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.
                </p>
            </div>
        </div>
    </div>


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