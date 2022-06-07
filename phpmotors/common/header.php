<div>
  <img src="/phpmotors/images/site/logo.png" alt="PHP Motors logo" id="logo">
  <?php
  if (isset($cookieFirstname)) {
    echo "<span id='cookie'>Welcome, $cookieFirstname</span>";
  }
  ?>
  <a href="/phpmotors/accounts?action=login" title="Login or Register with PHP Motors" id="acc">My Account</a>
</div>