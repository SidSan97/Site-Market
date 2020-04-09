<?php
session_start();
include('conexao.php');

$nome      = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$sobrenome = mysqli_real_escape_string($conexao, trim($_POST['sobrenome']));
$senha     = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$telefone  = mysqli_real_escape_string($conexao, $_POST['telefone']);
$email     = mysqli_real_escape_string($conexao, $_POST['email']);
$cpf       = mysqli_real_escape_string($conexao, $_POST['cpf']);
//$data      = date('Y-m-d', strtotime($data));
$data      = mysqli_real_escape_string($conexao, $_POST['nasc']);
$genero    = mysqli_real_escape_string($conexao, $_POST['genero']);
$cep       = mysqli_real_escape_string($conexao, $_POST['cep']);
$endereco  = mysqli_real_escape_string($conexao, $_POST['ender']);
$numero    = mysqli_real_escape_string($conexao, $_POST['num']);
$bairro    = mysqli_real_escape_string($conexao, $_POST['bairro']);
$cidade    = mysqli_real_escape_string($conexao, $_POST['cid']);
$estado    = mysqli_real_escape_string($conexao, $_POST['estado']);
$comp      = mysqli_real_escape_string($conexao, $_POST['comp']);

//CONSULTA SE HÁ OUTRO USUARIO COM MESMO CPF
$sql    = "select count(*) as total from usuario where usuario = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1)
{
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO usuario (usuario, sobrenome, senha, email, telefone, genero, cpf, cep,
                    nascimento, endereco, numero, bairro, cidade, estado, complemento,
                    data_cadastro) VALUES (
                    '" . $nome . "', 
                    '" . $sobrenome . "',
                    '" . $senha . "', 
                    '" . $email . "', 
                    '" . $telefone . "',
                    '" . $genero . "', 
                    '" . $cpf . "', 
                    '" . $cep . "', 
                    '" . $data . "', 
                    '" . $endereco . "', 
                    '" . $numero . "', 
                    '" . $bairro . "', 
                    '" . $cidade . "', 
                    '" . $estado . "',
                    '" . $comp . "', 
                    NOW())";

if($conexao->query($sql) === TRUE)
{
    $_SESSION['status_cadastro'] = true;
    echo "Cadastro feito com sucesso!";
} 

else
echo "Cadastro nao realizado";
echo $sql;

$conexao->close();

//header('Location: login.php');
exit;
?>