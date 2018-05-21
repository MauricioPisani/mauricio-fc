<?php
require_once './model/familia.php';
require_once './model/banco.php';
$c=new conecta();
$f=new familia();
$n=$f->select();
$a=strlen($n);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de familias</title>
    <link rel="stylesheet" href="view/estilo.css"/>  
    <script type="text/javascript" src="formularios.js"></script>
    </head>
    <body>
  
         
    </body>
</html>