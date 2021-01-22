<!DOCTYPE HTML>
<html lang="pt_br">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Crud PHP com MySQli</title>
  <style>
    div.container6 {
        display: flex;
        align-items: center;
        justify-content: center 
    }
  </style>
 </head>
 <body>
    <div class="container mt-5">
        <a class="btn btn-primary" href="index.php" role="button" value="editar">Página de cadastro</a>
    </div>

    <?php  
        //requisição das variáveis do banco
        require 'init.php';

        //requisição da conexão com banco
        require 'connection.php';

        //requisição das querys
        require 'database.php';

        $table = "tb_usuario";
        $nome = "João Silva";

        //DBDelete('');
       // var_dump(DBExecute($query));

        $pesquisa= 'Joao';

        //$usuario = DBRead('tb_usuario',"WHERE nome_usuario LIKE '%$pesquisa%'");
       // DBUpDate('tb_usuario', array(), 'id = 2');
    ?>

    <div class="container mt-5">
        <label class ="h4">Lista de Usuário:</label>
        <div class="card"  >
            <div class="card-body ">
                <?php
                //consulta da tabela de usuário
                    $usuario = DBRead('tb_usuario');
                //foreach para trabalhar com array
                    foreach($usuario as $user){
                        echo 'Nome: '.$user['nome_usuario'].'<br>';
                        echo 'Telefone: '.$user['telefone'].'<br>';
                        echo 'Endereço: '.$user['endereco'].'<br><br>';
    //MUDAR PARA O MÉTODO POST                   
                        echo '<a class="btn btn-primary" href="editar.php?id_usuario='.$user['id_usuario'].'" role="button" value="editar">Editar</a>
                            <a class="btn btn-primary" href="delete.php?id_usuario='.$user['id_usuario'].'" method="post" role="button" value="excluir">Excluir</a> <br><hr>';
                }
                
                ?>
            </div>
        <div>    
    </div>
    </body>
</html>