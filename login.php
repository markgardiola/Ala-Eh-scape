<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Registration</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/login-form-style.css">

</head>

<body>

  <div class="container">
    <div class="form1">
      <div class="bg-image">
        <h1>Welcome!</h1>
        <p>Ala-Eh-scape</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="form">
      <form action="login-register.php" method="post" autocomplete="off">
        <h1>Login</h1>
        <input type="email" name="email" placeholder="enter your email" required>
        <input type="password" name="password" id="password" placeholder="enter your password" required>
        <input type="submit" name="signIn" value="Login">
        <p>don't have an account yet?</p>
        <a href="registration.php">sign up</a>
      </form>
    </div>
  </div>

</body>

</html>