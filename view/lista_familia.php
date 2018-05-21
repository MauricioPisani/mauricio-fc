<?php
require_once './model/familia.php';
require_once './model/banco.php';
$c=new conecta();
$f=new familia();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de familias</title>
    <link rel="stylesheet" href="view/estilo.css"/>  
    <script type="text/javascript" src="formularios.js"></script>
    </head>
    <body>
        <h1>Bem-vindo ao lista de familias</h1>
         <?php
      $n=$f->select();
      $a=  strlen($n);
      echo '<table>';
      echo '<tr>';
      echo '<td>'."Nome da familia:".'</td>';
      echo '<td>'."Quantidade de menbros:".'</td>';
      echo '</tr>';
      for($i=0;$i<$a;$i++){
         echo '<tr>';
      echo '<td>'."$f->getNome()".'</td>';
      echo '<td>'."$f->getQuantidade_membros()".'</td>';
      echo '<td>'.'<a href = "../edita_familia.php.'.'?$f->getId()'.'>Editar</a>'.'</td>';
      echo '<td>'.'<a href = "../edita_familia.php.'.'?$f->getId()'.'>Ecluir</a>'.'</td>';
      echo '</td>';
      echo '</tr>';  
      }
         ?>
    </body>
</html>