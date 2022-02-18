<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <header>
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="registration.php">Registration</a>
        <a href="authorization.php">Authorization</a>
    </div>
</header>
</head>
<body>
    <diV class="container">
    <h1>Feedback</h1>
        <form id="mailForm">
            <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control"><br>
            <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control"><br>
            <input type="phone" id="phone" name="phone" placeholder="Enter your phone number" class="form-control"><br>
            <textarea name="message" id="message" placeholder="Enter your message" class="form-control"></textarea><br>
            <button type="button" id="sendMail" class="btn btn-success">Send message</button>
        </form>
        <div id="errorMess"></div>
    </diV>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/formMail.js"></script>
</body>
</html>