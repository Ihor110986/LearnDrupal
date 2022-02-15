<?php
    $task = $_POST['task'];
    if($task == '') {
        echo 'Enter this task';
        exit();
    }

    require 'configDB.php';

    $sql = 'INSERT INTO tasks(task) VALUES(:task)';
    $query = $pdo->prepare($sql);
    $query->execute(['task => $task']);

    header('Location: /');

?>