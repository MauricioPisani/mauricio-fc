<?php
require_once './model/familia.php';
require_once './model/banco.php';
$nome=$_POST['nome'];
$q=$_POST['quantidade'];
$c=new conecta();
$f=new familia();
if (isset($_POST['btcad'])) {
$f->setNome($nome);
$f->setQuantidade_membros($q);
$f->insert();
if ($f->insert()) {
    echo '<h1>'."Cadastrado com susseço".'</h1>';    
$c->sair();
}  else {
echo '<h1>'."ERRO....Não cadastrado :(".'</h1>';    
}    
}