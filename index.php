<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
   <!-- <h1>Mini Jeu Combat</h1>
    <form action="index.php" method="POST">
        <table>
            <tr>
                <td><label for="nom">Nom d'utilisateur:</label></td>
                <td><input type="text" name="nom" id="nom"><br></td>
            </tr>
            <tr>
                <td><label for="pass">Choisissez un mot de passe:</label></td>
                <td><input type="password" name="pass" id="pass" placeholder="********"><br></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Envoyer"></td>
            </tr>
        </table>
    </form>
-->
    <?php
    require 'classes/utilisateur.class.php';
    require 'classes/personnage.classe.php';
    // $jane = new Utilisateur($_POST['nom'], $_POST['pass']);
    //echo $jane->getName() . '<br>';
    $perso1 = new Personnage("Robin", 100, 200);
    echo $perso1->getNom();
    echo $perso1->getForce();
    echo $perso1->getSante();
    ?>
</body>

</html>