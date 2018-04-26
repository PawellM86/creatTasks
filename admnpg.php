<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin page</title>

    <link rel="stylesheet" href="style.css">

  </head>
  <body>

    <h1>Sukurkite užduotį:</h1>
  <?php include 'functions.php'; ?>
    <form class="" action="" method="post"  >
        <label for="create">Sukurti užduotį</label>
        <button id="push"type="button" name="task" value="create">OK</button> </br>
    </form>

    <div class="create">
      <form class="" action="admnpg.php" name="adminTasks" method="post">
        <textarea id="txtarea" name="text" rows="8" cols="80" value="" placeholder="Jūsų tekstas..."></textarea>
        <div>
          <button type="submit" name="button" id="send">Redaguoti</button>
          <input type="submit" name="add" value="Nusiusti">
        </div>
      </form>
    </div>


      <ul id="testing"></ul>


    <script type="text/javascript" src="script.js"></script>

  </body>
</html>
