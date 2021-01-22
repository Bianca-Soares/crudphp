<!DOCTYPE HTML>
<html lang="pt_br">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Crud PHP com MySQli</title>
 </head>
 <body>   
    <?php  
        //exibir menu
        require 'menu.php';
        //requisição das variáveis do banco
        require 'init.php';

        //requisição da conexão com banco
        require 'connection.php';

        //requisição das querys
        require 'database.php';

    ?>
    <div class="container p-5 shadow mt-5">
        <form method="post" action="/controle.php?acao=pesquisa">
            <label class ="h4">Pesquisar pelo nome:</label>
            <div class="form-group">
                <label for="telefone">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" >
            </div>
            <button class="btn btn-primary" type="submit">Pesquisar</a>
        </form>
    </div>
</body>
</html>