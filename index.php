<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <form class="forma" action="" method="post">
      <label for="user-input">Įveskite vartotojo vardą</label>
      <input id="inp" type="text" name="userName" value="" placeholder="your name" required></br></br>
      <label for="password">Įveskite slaptažodį</label>
      <input id="inp" type="password" name="password" value="" placeholder="enter password" required ></br></br>
      <input type="submit"  name="submit" value="OK" >
      <?php include 'functions.php'; ?>
    </form>
  </body>
</html>
