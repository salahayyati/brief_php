<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
 <form action="index.php" method="post">
     <input type="text" name="valeur_1" ><br>
     <input type="text" name="valeur_2" ><br>
<select name="operation" >
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>
     <input type="submit" name="sb1" value="entrer"><br>
 </form>
 </div>
</body>
<?php 
 if ( isset($_POST["sb1"])&& isset($_POST["valeur_1"])&& isset($_POST["valeur_2"]) && isset($_POST["operation"]))

 {
    $val1 = $_POST["valeur_1"];
    $val2 = $_POST["valeur_2"];
    $opr = $_POST["operation"];
    $rslt = 0;
    if( $opr == "+" ) {
        $rslt = $val1 + $val2;
    }
    if( $opr == "-" ) {
        $rslt = $val1 - $val2;
    }
    if( $opr == "*" ) {
        $rslt = $val1 * $val2;
    }
    if( $opr == "/" ) {
        $rslt = $val1 / $val2;
    }
    
     echo $rslt;
 }
 
?>
</html>