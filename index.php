<!DOCTYPE HTML>
<html lang="pt_BR">
 <head>
  <meta charset="UTF-8">
  <title>Crud PHP com MySQli</title>
 </head>
 <body>
    <?php echo "<p>Olá Mundo</p>"; 
        //requisição das variáveis do banco
        require 'init.php';

        //requisição da conexão com banco
        require 'connection.php';

        //requisição das variáveis do banco

        $nome = "João 'Silva'";

        $dados = array(
            'nome' => "João 'Silva'",
            'idade' => 30
        ); 

        $nome = DBEScape($dados);

        var_dump(DBEScape($dados));

        
         
    ?>
 </body>
</html>