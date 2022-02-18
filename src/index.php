<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do list</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<header>
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="registration.php">Registration</a>
        <a href="authorization.php">Authorization</a>
    </div>


    <!-- <a href="registration.php">Registration</a> |
    <a href="authorization.php">Authorization</a> -->
</header>
<body>
    <div class="container">
        <h1>To-do list</h1>
        <form class="form" action="/add.php" method="post">
            <input type="text" name="task" id="task" placeholder="Must be to make.." class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Add new task</button>
        </form>

        <?php
        require 'configDB.php';

         echo '<ul>';
         $query =$pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
         while($row = $query->fetch(PDO::FETCH_OBJ)) {
             echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Delete</button></a></li>';
         }
         echo '</ul>';
        ?>
    </div>

</body>
</html>
