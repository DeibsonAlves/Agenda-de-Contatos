<?php
require_once 'classe-pessoa.php';
$p=new Pessoa("cruspdo","localhost","root","");
?>
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
    <?php
if(isset ($_POST['nome']))
{
    $nome = addslashes(($_POST['nome']));
    $telefone = addslashes(($_POST['telefone']));
    $email = addslashes(($_POST['email']));
    if(!empty($nome) && !empty($telefone && !empty($email))){
//CADASTRAR
if($p->cadastrarPessoa($nome,$telefone,$email));

{
echo"Email já está cadastrado";
}
    }
    else
    {
        echo"Preencha todos os campos";
    }
}


?>
    <section id="esquerda">
        <form method="POST">
            <h2>CADASTRAR PESSOA</h2>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <input type="submit" value="cadastrar">
        </form>
    
    </section>

        <section id="direita">
        <table> 
                <tr id="titulo">
                    <td>NOME</td>
                    <td>TELEFONE</td>
                    <td colspan="2">EMAIL</td>
                </tr>
            <?php
            $dados = $p->BuscarDados();
            if(count($dados) > 0) //TEM PESSOAS NO BANCO DE DADOS
            {
                for($i=0; $i < count($dados); $i++)
                {
                    echo "<tr>"

                    fore ($dados[$i]as$k=>$v)
                    {
if($k !="id")
{
echo "<td>.$v.</td>";
}
                    }
                    ?> 
                    <td><a href="">Editar</a><a href="">Excluir</a></td> 
                    <?php
                    echo "</tr>";
                }
                
            }
            else //O BANCO ESTÁ VAZIO
            {
echo"AINDA NÃO PESSOAS CADASTRADAS";
            }

            ?>
        
            </table>
        </section>