<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
   <input type="text" name="nom" placeholder="nom" id="" required><br>
   <input type="text" name="prenom" placeholder="prenom" id=""required><br>
   <input type="text" name="adresse" id="" placeholder="adresse"required><br>
   <input type="text" name="ville" placeholder="ville" id=""required><br>
   <input type="text" name="codepostal" placeholder="codepostal" id=""required><br>
   <input type="submit" value="valider" name="sbm">
   </form>
</body>
</html>
<?php
if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["adresse"]) && isset($_POST["ville"]) && isset($_POST["codepostal"])){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse =  $_POST["adresse"];
    $ville = $_POST["ville"];
    $codepostal = $_POST["codepostal"];
}
?>
<table style="width:100%">
  <tr>
    <th>nom</th>
    <th>prenom</th> 
    <th>adresse</th>
    <th>ville</th>
    <th>codepostal</th>

  </tr>
  <tr>
    <td>
    <?php
    if(isset($_POST["nom"])){
        echo $_POST["nom"];
    }
    ?>
    </td>
    <td><?php
    if(isset($_POST["prenom"])){
        echo $_POST["prenom"];
    }
    ?></td>
    <td><?php
    if(isset($_POST["adresse"])){
        echo $_POST["adresse"];
    }
    ?></td>
    <td><?php
    if(isset($_POST["ville"])){
        echo $_POST["ville"];
    }
    ?></td>
    <td>
    <?php
    if(isset($_POST["codepostal"])){
        echo $_POST["codepostal"] ;
    }
    ?>
    </td>
  </tr>
  
</table>