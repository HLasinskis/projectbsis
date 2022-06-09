<?php include('server.php') ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reģistrs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@1,600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./static/main.css">
</head>
<body>
    <div class="container">
    <form method="post" action="Registration.php">
  	        <?php include('errors.php'); ?>
            <h1 class="form_title">Izveidot account</h1>
            <div class="form_message form_message-error"></div>
            <div class="form_input-group">
                <input type="text" name="username" value="<?php echo $username; ?>" class="form_input" autofocus placeholder="Lietotājvārds">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
            <input type="email" name="email" value="<?php echo $email; ?>" class="form_input" autofocus placeholder="E-pasta adrese">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="password" name="password_1" class="form_input" autofocus placeholder="Parole">
                <div class="form_input-error-message"></div>
            </div>
            <div class="form_input-group">
                <input type="password" name="password_2" class="form_input" autofocus placeholder="Atstiprināt paroli">
                <div class="form_input-error-message"></div>
            </div>
            <button type="submit" class="form_button" name="reg_user">Turpināt</button>
            <p class="form_text">
                <a class="form_link" href="./Login.php" >Ielogoties</a>
            </p>
        </form>    
    </div>    
    <script src="./static/main.js"></script>
</body>