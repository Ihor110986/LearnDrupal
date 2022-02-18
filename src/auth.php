<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_SPECIAL_CHARS);

    require 'configDB.php';

    $pass = md5($pass."ghjsfkld2345");

    $query = "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'";
    $result = $pdo->query($query);
    $user = $result->fetch(PDO::FETCH_ASSOC);
    if ($user === false)  {

        echo "No such user found";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, "/");

    header('Location: /');
    exit();
?>