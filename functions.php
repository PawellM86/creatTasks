<?php
    define( "DB_SERVER", "localhost" );
    define( "DB_USER", "root" );
    define( "DB_PASSWORD", "root" );
    define( "DB_NAME", "tasks" );

    $conn = new mysqli( DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME );

    $name = $_POST['userName'];
    $password = $_POST['password'];

    //login
    if ($name == "name" && $password =="name") {
      header("Location: admnpg.php");
    }
    if($name == "user" && $password =="user") {
      header("Location: userpage.php");
    }

    //query for user to show tasks
    $query = "SELECT `task` FROM `alltasks`";
    $results = $conn->query( $query );
    $resultArray = array();

    while ($result = $results->fetch_assoc()) {
      array_push( $resultArray, $result );

    }




       if (isset($_POST['add'])) {
        $adminTask = $_POST['text'];
        $queryInsert = "INSERT INTO `alltasks`(`task`) VALUES ('$adminTask')";
        $resultsInsert = $conn->query( $queryInsert );

        if ($queryInsert) {
            echo "<p>New record created successfully!</p>";
        } else {
            echo "<p>Error</p>";
        }
       }


    $conn->close();
