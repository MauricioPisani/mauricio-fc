<?php
require_once './model/guerra.php.php';
require_once './model/banco.php';
$nome=$_POST['nome'];
$inicio=$_POST['inicio'];
$fim=$_POST['fim'];
$c=new conecta();
$g=new guerra();
if (isset($_POST['btcad'])) {
$g->setNome($nome);
$g->setInicio($inicio);
$g->setFim($fim);
$g->insert();
if ($g->insert()) {
    echo '<h1>'."Cadastrado com susseço".'</h1>';    
$c->sair();
}  else {
echo '<h1>'."ERRO....Não cadastrado :(".'</h1>';    
}    
}