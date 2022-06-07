<?php
$classificationList = '<select id="classificationId" name="classificationId">';
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
  <title>Add Vehicle | PHP Motors</title>
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
      <h1>Add Vehicle</h1>
      <form action="/phpmotors/vehicles/index.php" method="post">
        <?php
        if (isset($message)) {
          echo $message;
        }
        ?>

        <?php echo $classificationList; ?><br><br>

        <label for="invMake"> Make</label><br>
        <input type="text" id="invMake" name="invMake" required <?php if (isset($invMake)) {
                                                                  echo "value='$invMake'";
                                                                } ?>><br><br>
        <label for="invModel"> Model</label><br>
        <input type="text" id="invModel" name="invModel" required <?php if (isset($invModel)) {
                                                                    echo "value='$invModel'";
                                                                  } ?>><br><br>
        <label for="invDescription"> Description</label><br>
        <textarea name="invDescription" id="invDescription" cols="30" rows="10" required <?php if (isset($invDescription)) {
                                                                                            echo "value='$invDescription'";
                                                                                          } ?>></textarea><br><br>
        <label for="invImage"> Image Path</label><br>
        <input type="text" id="invImage" name="invImage" value="/phpmotors/images/no-image.png" required <?php if (isset($invImage)) {
                                                                                                            echo "value='$invImage'";
                                                                                                          } ?>><br><br>
        <label for="invThumbnail"> Thumbnail Path</label><br>
        <input type="text" id="invThumbnail" name="invThumbnail" value="/phpmotors/images/no-image.png" required <?php if (isset($invThumbnail)) {
                                                                                                                    echo "value='$invThumbnail'";
                                                                                                                  } ?>><br><br>
        <label for="invPrice"> Price</label><br>
        <input type="text" id="invPrice" name="invPrice" required <?php if (isset($invPrice)) {
                                                                    echo "value='$invPrice'";
                                                                  } ?>><br><br>
        <label for="invStock"> Stock</label><br>
        <input type="text" id="invStock" name="invStock" required <?php if (isset($invStock)) {
                                                                    echo "value='$invStock'";
                                                                  } ?>><br><br>
        <label for="invColor"> Color</label><br>
        <input type="text" id="invColor" name="invColor" required <?php if (isset($invColor)) {
                                                                    echo "value='$invColor'";
                                                                  } ?>><br><br>
        <input type="submit" name="submit" value="Add Vehicle" class="submitBtn">
        <input type="hidden" name="action" value="add_vehicle">
      </form>

    </main>

    <hr>

    <footer>
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
    </footer>
  </div>
</body>

</html>