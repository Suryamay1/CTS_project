<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "Q@AS8@uyysuF6ppC";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
  echo mysqli_connect_error();
  exit;
}

$sql = "SELECT * FROM article ORDER BY id;";

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
    <title> My Blog </title>
    <meta charset="utf-8">
</head>
<body>
  <header>
    <h1>My Blog</h1>
  </header>

  <main>
    <ul>
      <?php foreach ($articles as $article): ?>
        <li>
          <article>
            <h2><?= $article['title'];?> </h2>
            <p><?= $article['content'];?> </p>
          </article>
        </li>
      <?php endforeach; ?>
    </ul>
  </main>
</body>
</html>
