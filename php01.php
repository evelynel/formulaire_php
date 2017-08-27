<?php

$title = '';
$body = '';

if ($_POST){
//var_dump($_GET);
if(isset($_POST['title'])) {
$title = $_POST['title'];
}

if(isset($_POST['body'])) {
$title = $_POST['body'];
}
}
?>

<!DOCTYPE html>
<html language="fr">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
<title></title>
<link rel="stylesheet" href="/css/master.css"/>
  </head>
  <body>

<form action='php01.php' method="post">

<input type="text" name="title" value="<?php echo htmlentities($title);?>" placeholder="titre"/> <br />

<textarea name="body" placeholder="texte"><?php echo htmlentities($body);?></textarea> <br />

<input type="submit" value="Envoyer"/>

  </form>

  </body>
</html>
