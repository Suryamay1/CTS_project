<?php

$db_host = "localhost";
$db_name = "timesheet";
$db_user = "Surya";
$db_pass = "z)5tik0NW_]E@-P2";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
  echo mysqli_connect_error();
  exit;
}

$sql = "SELECT * FROM test1 ORDER BY Employee_ID;";

$results = mysqli_query($conn, $sql);

if($results === false){
  echo myslqi_error($conn);
}
else{
  $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

}
?>

<!DOCTYPE html>
<html>
<head>
    <title> Timesheet </title>
    <meta charset="utf-8">
</head>
<body>
  <header>
    <h1>Timesheet </h1>
  </header>

  <main>
    <ul>

      <?php foreach ($articles as $article): ?>

        <li>
          <article>
            <h2><?= $article['Employee_ID'];?> </h2>
            <p><?= $article['Project_ID'];?> </p>
            <p><?= $article['Monday'];?> </p>
            <p><?= $article['Tuesday'];?> </p>
            <p><?= $article['Wednesday'];?> </p>
            <p><?= $article['Thursday'];?> </p>
            <p><?= $article['Friday'];?> </p>
          </article>
        </li>

      <?php endforeach; ?>
    </ul>
  </main>
</body>
</html>
