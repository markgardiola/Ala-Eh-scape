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

<section>
    <div class="heading">
      <h1 style="padding-top: 50px;">Welcome to Ala-Eh-scape</h1>
      <p style="margin-bottom: 0px; padding-bottom: 0px;">discover the beauty of Batangas</p>
    </div>
  </section>

  <div class="container">
    <div class="form">
      <form action="login-register.php" method="post">
        <h1>registration form</h1>
        <input type="text" name="fName" placeholder="enter your first name" required>
        <input type="text" name="lName" placeholder="enter your last name" required>
        <input type="email" name="email" placeholder="enter your email" required>
        <input type="password" name="password" id="password" placeholder="enter your password" required>
        <input type="submit" name="signUp" value="sign up">
        <p>already have an account? <a href="login.php">sign in</a></p>
      </form>
    </div>
  </div>

  <script src="js/login-script.js"></script>
</body>

</html>