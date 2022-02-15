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
<body>
    <?php
     require 'configDB.php';
    // require('connect.php');
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($connection, $query);

        if($result){
            $smsg = "Registration is success";
        } else {
                $fsmsg = "Error registration";
            }
        }
    ?>
    <div class="container1">
        <form class="form-signin" method="POST">
            <h2>Registration</h2>
            <?php if(isset($smsg)){?><div class="alert alert-success" role="alert"><?php echo $smsg;?> </div><?php }?>
            <?php if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"><?php echo $fsmsg;?> </div><?php }?>

            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>
    <div class="container">
        <h1>To-do list</h1>
        <form class="form" action="/add.php" method="post">
            <input type="text" name="task" id="task" placeholder="Must be to make.." class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Send</button>
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
