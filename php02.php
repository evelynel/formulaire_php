<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
</head>
<body>

  <form action="php02b.php" method="post">

    <input type="text" name="url" value="<?php htmlentities($url) ?>" placeholder="url" /><br/>

    <input type="text" name="tags[]" value="<?php htmlentities($tags) ?>" placeholder="tag1" /><br/>

    <input type="text" name="tags[]" value="<?php htmlentities($tags) ?>" placeholder="tag2" /><br/>

    <input type="text" name="tags[]" value="<?php htmlentities($tags) ?>" placeholder="tag3" /><br/>

    <input type="submit" value="envoyer"><br/>
  </body>
  </html>
