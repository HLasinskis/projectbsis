<?php include('server.php') ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pieslēgšana</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@1,600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./static/main.css">
<body>
    <div class="container">
    <form method="post" action="Login.php">
  	        <?php include('errors.php'); ?>
            <h1 class="form_title">Login</h1>
            <div class="form_message form_message-error"></div>
            <div class="form_input-group">
            <input type="text" name="username" class="form_input" autofocus placeholder="Lietotājvārds">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
            <input type="password" name="password" class="form_input" autofocus placeholder="Parole">
                <div class="form_input-error-message"></div>
            </div>
            <button type="submit" class="form_button" name="login_user">Turpināt</button>
            <p class="form_text">
                <a class="form_link" href="./Registration.php" >Uztaisīt jaunu account</a>
            </p>
        </form> 
    </div>    
    <script src="./static/main.js"></script>
</body>