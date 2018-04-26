<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>user page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Užduotys:</h1>
    <?php include 'functions.php'; ?>
    <ul>
      <?php foreach ($resultArray as $key ): ?>
      <li> <?php echo  $key["task"]; ?> </li>
    <?php endforeach; ?>
    </ul>
  </body>
</html>
