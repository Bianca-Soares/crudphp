<!DOCTYPE HTML>
<html lang="pt_br">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Crud PHP com MySQli</title>
 </head>
 <body>

    <div class="container p-5 shadow mt-5">
        <form method="post" action="controller.php">
            <label class ="h4">Cadastro de Usuário:</label>
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome_usuario" nome="nome_usuario" >
            </div>
            <div class="form-group">
                <label for="telefone">Telefone: </label>
                <input type="text" class="form-control" id="telefone" nome="telefone" >
            </div>
            <div class="form-group">
                <label for="endereco">Endereço: </label>
                <input type="text" class="form-control" id="endereco" nome="endereco" >
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>   
    <?php  
        //requisição das variáveis do banco
        require 'init.php';

        //requisição da conexão com banco
        require 'connection.php';

        //requisição das querys
        require 'database.php';

        $nome = "João 'Silva'";

       
        //var_dump(DBExecute($query));
        
        $usuario = array(
            'nome_usuario'  => 'Silva',
            'telefone'      => '91 9999-9999',
            'endereco'      => 'Rua 15'
        );
        
        //$salva = DBCreate('tb_usuario', $usuario);

        $usuario = DBRead('tb_usuario', null, 'nome_usuario, telefone');
        //var_dump($usuario);

        

    ?>
    
 </body>
</html>