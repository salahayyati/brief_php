<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form action="" method="POST"> 
    <input type="text" name="horstax" placeholder="hT">
    <input type="text" name="tva" placeholder="hTVA">
    <input type="submit" name="subscribe" value="calculer">
    </form>
    <?php
    if (isset($_POST["horstax"]) && isset($_POST["tva"])) {
        $horst = $_POST["horstax"];
        $tva = $_POST["tva"];
        $tvaa = $horst*($tva/100);
        $ttc = $horst + $tva;
        echo "your tva".$tva." your ttc ".$ttc;
    }
    
    ?>
</body>
</html>