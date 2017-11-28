<?php
session_start();

if(count($_SESSION['errorMessage']) >= 1) {
  foreach($_SESSION['errorMessage'] as $message) {
    echo join('<br>', $message);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <form action="post.php" method="POST">
    <label for="name">Name:</label>
    <input id="name" type="text" name="name">
    <br>
    <label for="tel">Tel:</label>
    <input id="tel" type="text" name="tel">
    <br>
    <input type="submit" value="submit">
  </form>
</body>
</html>
