<!-- Stocker les données de l'utilisateur dans :
  la variable $url
  la variable $tag
afficher le contenu de ces variables dans la balise body -->

<?php
$url = '';
$tags = [];


if ($_POST){
  // var_dump ($_POST);
  if(isset($_POST['url'])) {
    $url = $_POST['url'];
  }
  if(isset($_POST['tags'])) {
    $tag1 = $_POST['tags'];
  }
}

  ?>

  <!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>

    <div><?= htmlentities($url) ?></div>
    <div><?= htmlentities($tags) ?></div>

  </body>
  </html>
