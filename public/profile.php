<?php
include_once '../config/config.php';
$title = 'Профиль shop';

include_once 'templates/head.php';
?>

<?php
if ($_SESSION['id_user']) {
?>

    <body>

        <?php
        include_once 'templates/header.php'
        ?>

        <div class="title">
            <div class="container title_wrap">
                <div class="title_name">
                    <h1><?= $_SESSION['name'] ?></h1>
                </div>
                <a href="../models/user.php?active=exit" class="link_all_product link">Выход</a>
            </div>
        </div>


        <!-- КОНТЕНТ -->
        <?php
        if ($_SESSION['role'] != 1) {    #не админ
            include_once 'templates/user_profile.php';
        } else {
            include_once 'templates/admin_profile.php';
        }

        ?>
        <!-- КОНТЕНТ -->


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
    <?php
} else {
    header("Location: ../public");
}
    ?>