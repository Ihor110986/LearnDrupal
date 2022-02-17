<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <h1>Form authorization</h1>
        <form action="auth.php" method="POST" class="form_authorization">
            <input type="text" name="login" class="form-control" placeholder="Enter your login" id='login'><br>
            <input type="password" name="pass" class="form-control" placeholder="Enter password" id="pass"><br>
            <button class="btn btn-lg btn-success" type="submit">Authorization</button>
        </form>
        <?php else:?>
            <h4>Hello <?=$_COOKIE['user']?>!<br>Click <a href="/exit.php">here</a> to exit </h4>
        <?php endif;?>
    </div>
</body>
</html>