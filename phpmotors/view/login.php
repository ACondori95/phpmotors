<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login | PHP Motors</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/phpmotors/css/style.css" type="text/css" rel="stylesheet" media="screen">
  <link href="/phpmotors/css/large.css" type="text/css" rel="stylesheet" media="screen">
</head>

<body>
  <div id="wrapper">
    <header>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/header.php" ?>
    </header>

    <nav>
      <?php echo $navList; ?>
    </nav>

    <main>
      <h1>Log In</h1>
      <?php
      if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
      }
      ?>
      <form method="post" action="/phpmotors/accounts/">
        <legend>Enter your Information</legend><br>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required <?php if (isset($clientFirstname)) {
                                                                echo "value='$clientFirstname'";
                                                              } ?>><br><br>
        <label for="password">Password</label><br>
        <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character.</span><br>
        <input id="password" type="password" name="password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"><br><br>
        <input type="submit" value="Log In" class="submitBtn">
        <input type="hidden" name="action" value="Login">
      </form>
      <p>No account? <a href="/phpmotors/accounts?action=register-page">Sign-Up</a></p>
    </main>

    <hr>

    <footer>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
    </footer>
  </div>
</body>

</html>