<!DOCTYPE HTML>
<html lang="pt_br">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Crud PHP com MySQli</title>
 </head>
 <body>

    <div class="container p-5 shadow mt-5">
        <form method="post" action="/database.php">
            <label class ="h4">Cadastro de Usuário:</label>
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" >
            </div>
            <div class="form-group">
                <label for="telefone">Telefone: </label>
                <input type="text" class="form-control" id="telefone" name="telefone" >
            </div>
            <div class="form-group">
                <label for="endereco">Endereço: </label>
                <input type="text" class="form-control" id="endereco" name="endereco" >
            </div>
            <button class="btn btn-primary" type="submit">Registrar</a>
        </form>
    </div>   
    <?php  
        //requisição das variáveis do banco
        require 'init.php';

        //requisição da conexão com banco
        require 'connection.php';

        //requisição das querys
        require 'database.php';

        $nome = "João Silva";

       
        //var_dump(DBExecute($query));

        $pesquisa= 'Joao';

        //$usuario = DBRead('tb_usuario',"WHERE nome_usuario LIKE '%$pesquisa%'");
       // DBUpDate('tb_usuario', array(), 'id = 2');
    ?>

    <div class="container p-5 mt-5">
        <label class ="h4">Lista de Usuário:</label>
        <div class="form-group">
            <?php
            //consulta da tabela de usuário
                $usuario = DBRead('tb_usuario');
            //foreach para trabalhar com array
                foreach($usuario as $user){
                    echo 'Nome: '.$user['nome_usuario'].'<br>';
                    echo 'Telefone: '.$user['telefone'].'<br>';
                    echo 'Endereço: '.$user['endereco'].'<br><br>';
                    echo '<a class="btn btn-primary" href="#" role="button" value="editar">Editar</a>
                          <a class="btn btn-primary" href="#" role="button" value="excluir">Excluir</a> <br><hr>';
            }
            
            ?>
        </div>
    </div>
    
 </body>
</html>