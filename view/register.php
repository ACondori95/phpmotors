<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Register | PHP Motors</title>
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
      <h1>Register</h1>
      <?php
      if (isset($message)) {
        echo $message;
      }
      ?>
      <form action="/phpmotors/accounts/index.php" method="post">
        <label for="fName">First Name</label><br>
        <input type="text" name="clientFirstname" id="fName" required <?php if (isset($clientFirstname)) {
                                                                        echo "value='$clientFirstname'";
                                                                      } ?>><br><br>
        <label for="lName">Last Name</label><br>
        <input type="text" name="clientLastname" id="lName" required <?php if (isset($clientLastname)) {
                                                                        echo "value='$clientLastname'";
                                                                      } ?>><br><br>
        <label for="email">Email</label><br>
        <input type="email" name="clientEmail" id="email" required <?php if (isset($clientEmail)) {
                                                                      echo "value='$clientEmail'";
                                                                    } ?>><br><br>
        <label for="password">Password</label>
        <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character.</span><br>
        <input type="password" name="clientPassword" id="password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"><br><br>
        <input type="submit" value="REGISTER NOW" class="submitBtn">
        <input type="hidden" name="action" value="register">
      </form>
    </main>

    <hr>

    <footer>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
    </footer>
  </div>
</body>

</html>