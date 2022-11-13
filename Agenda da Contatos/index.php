<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
try 
{
    $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");

}

catch(PDOException $e) {
echo "Erro com banco de dados: ".$e->getMessage();
}

catch(Exception $e){
    echo "Erro genérico: ".$e->getMessage();  
}

?>

</body>
</html>