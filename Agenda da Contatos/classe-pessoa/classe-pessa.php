<?php

class pessaa{
private $pdo;
    public function __construct($dbname, $host, $user, $senha);
    {
       {
        $this->pdo=new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
       }
       catch (PD       try
OException $e) {
echo"Erro com banco de dados: ".$e-> getMessage();
exit();
       }
       catch (Exception $e) {
        echo"Erro genérico: ".$e-> getMessage();
        exit();
       }
       
    }
    // FUNÇÃO PARA BUSCAR DADOS E COLOCAR NO CANTO DIREITO
public function BuscarDados()
{
    $res =$array();
    $cmd =$this->pdo->queryqq("SELECT *  FROM pessoa ORDER BY nome ");
    $res = $cmd->fetchAll(PDO::FETCH_);
    return $res;
}

public function cadastrarPessoa($nome, $telefone, $emai)
{
    // ANTES DE CADASTRAR, VERIFICAR SE JÁ POSSUE EMAIL CADASTRADO
$cnd = $this->pdo->prepare("SELECT id from pessoa WHERE email = :e");
 $cmd->bindValue(":e",$email);
 $cmd->execute();
 if($cmd->rowCount() >0)// O EMAIL JÁ EXISTE NO BANCO DE DADOS
 {
    return false;
 } else // O EMAIL NÃO ENCONTRADO
 {
$cmd = $this ->pdo->prepare("INSER INTO pessoa(nome, telefone, email) VALUES (:n, :t, :e )");
$cmd->bindValue(":n", $nome);
$cmd->bindValue(":t", $telefone);
$cmd->bindValue(":e", $email);
$cmd->execute();
return true;
 }
 
}
}

?>