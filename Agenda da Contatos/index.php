<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoas</title>
    <link rel="stylesheet" href="estilo.css/">
</head>
<body>
    <section id="direita">
        <form>
            <h2>CADASTRAR PESSOA</h2>
            <label> </label>
            <input>
            <label> </label>
            <input>
            <label> </label>
            <input>
        </form>
    
    </section>

        <section id="esquerda">
        </section>
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

$pdo->prepare()




?>

</body>
</html>