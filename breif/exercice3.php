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
    <input type="text" name="val_1">
    <input type="text" name="b">
    <input type="submit" value="sbmit" name="sbm">
    </form>
</body>
</html>
<?php 
if (isset($_POST["val_1"]) && isset($_POST["b"]))
{
    $var_2 = $_POST["b"];
    $var_1 = $_POST["val_1"];
    for ($i=0; $i<$var_2; $i++){
     
        
        echo $var_1."*".$i."=".$var_1*$i."<br>";
    }
}

?>