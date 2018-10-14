<!doctype html>
<html>
<head>
    <title> <?= $_SERVER['SERVER_NAME']; ?> </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./server_files/style.css">
</head>

<body>
<?php
    require __DIR__ . '/server_files/server.php';
?>
  <nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">Folders list</a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link active" href="https://github.com/jesusAG28/document-root-folder-reader">GitHub</a>
        </li>
        <li class="nav-item">
             <a class="nav-link" href="https://twitter.com/jesusayus">&#169; 2018 by Jesús Ayús</a>
        </li>
    </ul>
  </nav>

    <div class="container-fluid">
        <div class="card-columns">
            <?= $content ?>
        </div>
    </div>

</body>

</html>