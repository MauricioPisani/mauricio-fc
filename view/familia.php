<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de familia</title>
    <link rel="stylesheet" href="view/estilo.css"/>  
    <script type="text/javascript" src="formularios.js"></script>
    </head>
    <body>
        <h1>Bem-vindo ao cadastro de familia</h1>
        <form name="aaa" method="POST" action="../cad_familia.php">
            Nome:<input type="text" name="nome" value="" size="32" id="login"onchange="alerta2(id);" /><br/>
            Quantidade de membros<input type="text" name="quantidade" value="" size="32" /><br/>
            <input type="submit" value="Cadastrar" name="btcad" id="btcad"/>
            <input type="reset" value="Linpar" name="btlinpar" id="btlinpar"/>
        </form>   
    </body>
</html>