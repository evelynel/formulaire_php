<!-- créer un formulaire de login :
champ login
champ passeworld

récupérer ces données côté php puis :
afficher les données de l'utilisateur dans les champs
vérifier que :
vérifier que le login correspond à "toto"
le password correspond à "123"
afficher un message d'erreur si le login ou le mot de passe est faux
afficher un message de bienvenue si le login et le mot de passe sont corrects -->

<?php
$login = '';
$MDP = '';
$message = '';

if ($_POST){
  //var_dump($_GET);
  //isset = initialisé(envoyé)
  if(isset($_POST['login'])) {
    $login = $_POST['login'];
  }
  if(isset($_POST['MDP'])) {
    $MDP = $_POST['MDP'];
  }
  if ($_POST['login'] == 'toto' AND $_POST['MDP'] == 123){
      header('LOCATION: https://duckduckgo.com/', true, 302);
  }
  else {
    $message = "Erreur !";
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

<div><?= $message ?></div>
  <form action='' method="post">

    <input type="text" name="login" value="<?php echo htmlentities($login);?>" placeholder="login"/> <br />

    <input type="password" name="MDP" value="<?php echo htmlentities($MDP);?>" placeholder="Mot de passe"/> <br />

    <input type="submit" value="Envoyer"/>

  </form>

</body>
</html>
