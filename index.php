<!doctype html>
<html>
<head>
    <title> <?= $_SERVER['SERVER_NAME']; ?> </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./server_files/style.css">
    
</head>

<body>
    <?php
        require __DIR__ . '/server_files/server.php';
    ?>
  <nav class="navbar navbar-expand navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="index.html">Folders list</a>
    <ul class="navbar-nav mr-auto ">
        <li class="nav-item d-none d-md-block">
             <a class="nav-link active" href="" > &#169; 2018 by Jesús Ayús </a>
        </li>
        <li class="nav-item d-none d-sm-block d-md-none">
             <a class="nav-link active" href="" > &#169;J.Ayús </a>
        </li>
        <li class="nav-item d-block d-sm-none">
             <a class="nav-link active" href="" > &#169;J.A.</a>
        </li>

        <!-- TWITTER -->

        <li class="nav-item d-none d-md-block">
             <a class="nav-link" href="https://twitter.com/jesusayus"><span class="fa fa-twitter"></span> Twitter</a>
        </li>
        <li class="nav-item d-none d-sm-block d-md-none">
             <a class="nav-link" href="https://twitter.com/jesusayus"><span class="fa fa-twitter"></span> Tw</a>
        </li>
        <li class="nav-item d-block d-sm-none">
             <a class="nav-link" href="https://twitter.com/jesusayus"><span class="fa fa-twitter"></span></a>
        </li>

        <!-- FACEBOOK -->

        <li class="nav-item d-none d-md-block">
             <a class="nav-link" href="https://www.facebook.com/jesus.ayus"><span class="fa fa-facebook-official"></span> Facebook</a>
        </li>
        <li class="nav-item d-none d-sm-block d-md-none">
             <a class="nav-link" href="https://www.facebook.com/jesus.ayus"><span class="fa fa-facebook-official"></span> Face</a>
        </li>
        <li class="nav-item d-block d-sm-none">
             <a class="nav-link" href="https://www.facebook.com/jesus.ayus"><span class="fa fa-facebook-official"></span></a>
        </li>

        <!-- BITBUCKET -->

        <li class="nav-item d-none d-md-block">
            <a class="nav-link" href="https://bitbucket.org/jesusAG28/"><span class="fa fa-bitbucket"></span> BitBucket</a>
        </li>
        <li class="nav-item d-none d-sm-block d-md-none">
            <a class="nav-link" href="https://bitbucket.org/jesusAG28/"><span class="fa fa-bitbucket"></span> Bit</a>
        </li>
        <li class="nav-item d-block d-sm-none">
            <a class="nav-link" href="https://bitbucket.org/jesusAG28/"><span class="fa fa-bitbucket"></span></a>
        </li>

        <!-- GITHUB  -->

        <li class="nav-item d-none d-md-block">
             <a class="nav-link" href="https://github.com/jesusAG28/document-root-folder-reader"><span class="fa fa-github"></span> GitHub</a>
        </li>
        <li class="nav-item d-none d-sm-block d-md-none">
             <a class="nav-link" href="https://github.com/jesusAG28/document-root-folder-reader"><span class="fa fa-github"></span> Git</a>
        </li>
        <li class="nav-item d-block d-sm-none">
             <a class="nav-link" href="https://github.com/jesusAG28/document-root-folder-reader"><span class="fa fa-github"></span></a>
        </li>
    </ul>
  </nav>

    <div id="content" class="container-fluid">
        <div class="card-columns">
            <?= $content ?>
        </div>
    </div>

    <script src="./server_files/index.js"></script>

</body>

</html>