<?php
SESSION_START();


const SERVER = "localhost";
const DB = "shopGB";
const LOGIN = "root";
const PASS = "";

$connect = mysqli_connect(SERVER, LOGIN, PASS, DB);
