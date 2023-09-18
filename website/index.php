<?php
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }

  require_once 'private/dbconnect.php';
  session_start();

  $_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset = "UTF-8">
  <title><?php if (isset($page)) { echo $page; } else {echo "Home";}?></title>
  <link rel="icon" type="image/x-icon" href="media/favicon.ico">
  <link href="style/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.0-beta.3/dist/iconify-icon.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
  <?php
    require_once 'include/navbar.inc.php';

    if (isset($page, $_SESSION['userid'], $_SESSION['userrole'])) {
      $file = 'include/'.$page.'.inc.php';
      if (file_exists($file)) {
        require_once $file;
      } else {
        header("Location: index.php?page=404");
        exit();
      }
    } else {
      require_once 'include/login.inc.php';
    }

    // Debugging: display the contents of the session
    echo "<pre>", print_r($_SESSION),"</pre>";

    // Check if the beeway lock session is set and the user is not on the editbeewaytest page
    if (isset($_SESSION['beewaylock']) && $_SESSION['beewaylock'] === true && $page !== 'editbeewaytest') {
      // Update the lock to 0 in the database
      $stmt = $conn->prepare("UPDATE beeway SET `lock` = 0 WHERE `lock` = :userid");
      $stmt->bindValue(':userid', $_SESSION['userid'], PDO::PARAM_INT);
      $stmt->execute();

      // Unset the session variable
      unset($_SESSION['beewaylock']);
    }

    require_once 'include/error.inc.php';
    require_once 'include/info.inc.php';
  ?>

</body>
</html>