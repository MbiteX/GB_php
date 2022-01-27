<?php
include_once '../config/config.php';

$id_good = $_GET['id'];
$active = $_GET['active'];

function addGood($connect, $id_good)
{
    $sql_if = "SELECT * from basket where good_id=$id_good and user_id = {$_SESSION['id_user']} and status = 1;";
    $res_if = mysqli_query($connect, $sql_if);


    if (mysqli_num_rows($res_if) == 0) {
        $sql = "SELECT * FROM `goods` WHERE id=$id_good";
        $result = mysqli_query($connect, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            $sql_basket = "INSERT INTO `basket` (`name`, `img`, `price`, `color`, `size`, `user_id`, `good_id`,`tel_user`, `email_user`) VALUES ( '{$row['name']}', '{$row['img']}', '{$row['price']}', '{$row['color']}', '{$row['size']}', '{$_SESSION['id_user']}', '$id_good', '{$_SESSION['tel']}', '{$_SESSION['email']}');";
            $res = mysqli_query($connect, $sql_basket);

            if ($res) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
                print_r($connect);
                // header("Location: ../public/registration.php");
            }
        }
    } else {
        $sql_e = "UPDATE basket SET count = count+1 WHERE good_id = $id_good and user_id = {$_SESSION['id_user']}";
        $res_e = mysqli_query($connect, $sql_e);
        if ($res_e) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            print_r($connect);
            // header("Location: ../public/registration.php");
        }
    }
}



function delGood($connect, $id_good)
{
    $sql_del = "DELETE FROM basket WHERE id = $id_good and user_id = {$_SESSION['id_user']} and status = 1;";
    $res_del = mysqli_query($connect, $sql_del);
    if ($res_del) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        print_r($connect);
        // header("Location: ../public/registration.php");
    }
}



function buyBasket($connect)
{
    $sql_buy = "UPDATE basket SET status = 2 WHERE user_id = {$_SESSION['id_user']} and status = 1";
    $res_buy = mysqli_query($connect, $sql_buy);
    if ($res_buy) {
        header('Location: ../public');
    } else {
        print_r($connect);
        // header("Location: ../public/registration.php");
    }
}



function clearBasket($connect)
{
    $sql_clear = "DELETE FROM basket WHERE user_id = {$_SESSION['id_user']} and status = 1;";
    $res_clear = mysqli_query($connect, $sql_clear);
    if ($res_clear) {
        header('Location: ../public');
    } else {
        print_r($connect);
        // header("Location: ../public/registration.php");
    }
}


function sale($connect)
{
    $sql_buy = "UPDATE basket SET status = 3 WHERE user_id = {$_GET['user']} and good_id = {$_GET['id']}";
    $res_buy = mysqli_query($connect, $sql_buy);
    if ($res_buy) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        print_r($connect);
        // header("Location: ../public/registration.php");
    }
}




switch ($active) {
    case 'add':
        addGood($connect, $id_good);
        break;
    case 'del':
        delGood($connect, $id_good);
        break;
    case 'buy':
        buyBasket($connect);
        break;
    case 'clear':
        clearBasket($connect);
        break;
    case 'sale':
        sale($connect);
        break;

        // default:
        //     # code...
        //     break;
}