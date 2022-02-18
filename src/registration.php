<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="authorization.php">Authorization</a>
        <a href="feedback.php">Feedback</a>
    </div>
</head>
<body>
    <div class="container mt-4">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <h1>Form registration</h1>
        <form action="check.php" method="POST" class="form_registration">
            <input type="text" name="login" class="form-control" placeholder="Enter your login" id='login'><br>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" id='name'><br>
            <input type="email" name="email" class="form-control" placeholder="Email" id='email'><br>
            <input type="password" name="pass" class="form-control" placeholder="Enter password" id="pass"><br>
            <button class="btn btn-lg btn-success" type="submit">Register</button>
        </form>
        <?php else:?>
            <h4>Hello <?=$_COOKIE['user']?>!<br>Click <a href="/exit.php">here</a> to exit </h4>
        <?php endif;?>
    </div>
</body>
</html>