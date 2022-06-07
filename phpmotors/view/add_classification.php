<?php
// Get the functions library
$classificationList = '<select id="classificationId" name="classificationId">';
$classificationList .= '<option value="placeholder" disabled selected>Choose car classification</option>';
foreach ($classifications as $classification) {
  $classificationList .= "<option value='$classification[classificationId]'";
  if (isset($classificationId)) {
    if ($classification['classificationId'] === $classificationId) {
      $classificationList .= ' selected ';
    }
  }
  $classificationList .= ">$classification[classificationName]</option>";
}
$classificationList .= '</select>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Add Classification | PHP Motors</title>
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
      <h1>Add Classification</h1>
      <form action="/phpmotors/vehicles/index.php" method="post">
        <?php
        if (isset($message)) {
          echo $message;
        }
        ?>
        <label for="classificationName">Classification Name</label><br>
        <input type="text" name="classificationName" id="classificationName" required <?php if (isset($classificationName)) {
                                                                                        echo "value='$classificationName'";
                                                                                      } ?>><br><br>
        <input type="submit" name="submit" value="Add Classification" class="submitBtn">
        <input type="hidden" name="action" value="add_classification">
      </form>

    </main>

    <hr>

    <footer>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
    </footer>
  </div>
</body>

</html>