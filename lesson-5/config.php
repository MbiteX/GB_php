<?php
const SERVER = "localhost";
const DB = "gallery";
const LOGIN = "root";
const PASS = ""; // У меня пароль пустой почему-то, не как у вас.

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB);