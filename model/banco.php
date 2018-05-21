<?php
class conecta{
function conectar() {
$bd="testefc";
$user="root";
$port="3306";
$senha="";
$servidor = "localhost";
$conexao = mysqli_connect("$servidor ,$user ,$senha ,$bd");
return $conexao;
if(!$conexao){
	die("impossivel conectar!");
}
    
}
function sair(){
    mysqli_close();
}
}