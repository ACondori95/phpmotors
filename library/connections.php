
<?php
/*
 * Proxy connection to the phpmotors database
 */

function phpmotorsConnect()
{
  $server = 'localhost';
  $dbname = 'phpmotors';
  $username = 'iClient';
  $password = 'F1wYS_wC1t4QKWF9';
  $dsn = "mysql:host=$server;dbname=$dbname";
  $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

  try {
    $link = new PDO($dsn, $username, $password, $options);
    return $link;
  } catch (PDOException $e) {
    header('Location: /phpmotors/view/500.php');
  }
}
