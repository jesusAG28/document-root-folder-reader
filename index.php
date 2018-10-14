<!doctype html>
<html>
<head>
    <title> <?= $_SERVER['SERVER_NAME']; ?> </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./server_files/style.css">
    <link rel="stylesheet" href="./server_files/bootstrap-.css">
</head>

<body>
    <?php
        require __DIR__ . '/server_files/server.php';
    ?>
  <nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">Folders list</a>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
             <a class="nav-link active disabled" href=""> &#169; 2018 by Jesús Ayús </a>
        </li>
        <li class="nav-item">
             <a class="nav-link" href="https://twitter.com/jesusayus"><span class="fa fa-twitter"></span> Twitter</a>
        </li>
        <li class="nav-item">
             <a class="nav-link" href="https://twitter.com/jesusayus"><span class="fa fa-facebook-official"></span> Facebook</a>
        </li>
        <li id="git" class="nav-item">
            <a class="nav-link" href="https://github.com/jesusAG28/document-root-folder-reader"><span class="fa fa-bitbucket"></span> BitBucket</a>
        </li>
        <li class="nav-item">
             <a class="nav-link" href="https://twitter.com/jesusayus"><span class="fa fa-github"></span> GitHub</a>
        </li>
    </ul>
  </nav>

    <div class="container-fluid">
        <div class="card-columns">
            <?= $content ?>
        </div>
    </div>

    <script src="./server_files/index.js"></script>

</body>

</html>