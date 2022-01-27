<?php
include_once '../config/config.php';

$name = $_POST['name'] ?? strip_tags($_POST['name']);
$tel = $_POST['tel'] ?? strip_tags($_POST['tel']);
$email = $_POST['email'] ?? strip_tags($_POST['email']);
$pass = $_POST['pass'] ?? strip_tags($_POST['pass']);

$pass = md5($pass);


// РЕГИСТРАЦИЯ
function RegUser($connect, $name, $tel, $email, $pass)
{
    // получаем список с логином и поролем
    $sql = "select * from users where email='$email' and pass='$pass'";
    $res = mysqli_query($connect, $sql);

    // если если логин пороль совпадает, записываем в сессию, делаем вход
    if (mysqli_num_rows($res) > 0) {
        while ($data = mysqli_fetch_assoc($res)) {
            $_SESSION["role"] = $data['role'];
            $_SESSION["id_user"] = $data['id'];
            $_SESSION["name"] = $data['name'];
            $_SESSION["tel"] = $data['tel'];
            $_SESSION["email"] = $data['email'];
            header("Location: ../public/profile.php");
        }

        //  иначе добавляем в БД нового пользователя
    } else {
        $sql = "INSERT INTO `users` (`name`, `tel`, `email`, `pass`) VALUES ('{$name}', '{$tel}', '{$email}', '{$pass}');";
        $res = mysqli_query($connect, $sql);
        if ($res) {
            header("Location: ../public/index.php");
        } else {
            print_r($connect);
            // header("Location: ../public/registration.php");
        }
    }
}
// РЕГИСТРАЦИЯ

// ВХОД
function LoginUser($connect, $email, $pass)
{
    // получаем список с логином и поролем
    $sql = "select * from users where email='$email' and pass='$pass'";
    $res = mysqli_query($connect, $sql);

    // если если логин пороль совпадает, записываем в сессию, делаем вход
    if (mysqli_num_rows($res) > 0) {

        while ($data = mysqli_fetch_assoc($res)) {
            $_SESSION["role"] = $data['role'];
            $_SESSION["id_user"] = $data['id'];
            $_SESSION["name"] = $data['name'];
            $_SESSION["tel"] = $data['tel'];
            $_SESSION["email"] = $data['email'];
            header("Location: ../public/profile.php");
        }

        //  иначе отправляем на регистрацию.
    } else {
        header("Location: ../public/registration.php");
    }
}
// ВХОД


function ExitUser()
{
    session_destroy();
    header("Location: ../public/registration.php?active=login");
}




switch ($_GET['active']) {
    case 'reg':
        RegUser($connect, $name, $tel, $email, $pass);
        break;
    case 'login':
        LoginUser($connect, $email, $pass);
        break;
    case 'exit':
        ExitUser();
        break;

        // default:
        //     # code...
        //     break;
}
