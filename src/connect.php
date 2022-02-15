<?php
    $connection = mysqli_connect(hostname:'newdb', username:'newdb', password: 'aabbcc1109');
    $select_db = mysqli_select_db(link: $connection, dbname:'newdb');

?>