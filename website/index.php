<?php
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }

  require_once 'private/dbconnect.php';
  session_start();

  $_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset = "UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if (isset($page)) { echo $page; } else {echo "Home";}?></title>
  <link rel="icon" type="image/x-icon" href="media/drone-logo.ico">
  <link href="style/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&display=swap">
  <!-- <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.0-beta.3/dist/iconify-icon.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
</head>
<body>
  <?php
    require_once 'include/navbar.inc.php';

    $home = 'index.php?page=home';

    try {
      if (isset($page)) {
        $file = 'include/'.$page.'.inc.php';
        if (file_exists($file)) {
          require_once $file;
        } else {
          header("Location: index.php?page=404");
          exit();
        }
      } else {
        require_once 'include/home.inc.php';
      }
    } catch (\Exception $e) {
      echo '<meta http-equiv="refresh" content="0; url='.$home.'" />';
    }

    // Debugging: display the contents of the session
    // echo "<pre>", print_r($_SESSION),"</pre>";

    require_once 'include/error.inc.php';
    require_once 'include/info.inc.php';
  ?>
</body>
</html>