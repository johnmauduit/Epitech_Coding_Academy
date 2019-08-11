<?php

session_start();

    session_unset($_SESSION['name']);
    unset($_COOKIE['name']);
    setcookie("name", NULL, time() -3600);
    header('Location: ../register.html');

