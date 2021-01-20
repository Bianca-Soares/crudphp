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

        $nome = DBEScape($nome);

        echo "SELECT * FROM tb_usuario WHERE nome_usuario = '$nome' ";

         
    ?>
 </body>
</html>