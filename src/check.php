<?php
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_EMAIL);
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_SPECIAL_CHARS);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_SPECIAL_CHARS);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "Invalid login length";
        exit();
    } else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "Invalid name length";
        exit();
    } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 10) {
        echo "Invalid password length(from 2 to 10 characters)";
        exit();
    }

    $pass = md5($pass."ghjsfkld2345");


require 'configDB.php';

    $query = "INSERT INTO `users` (`email`, `login`, `pass`, `name`) VALUES ('$email', '$login', '$pass', '$name')";
    $result = $pdo->query($query);

    header('Location: /');
    exit();
?>