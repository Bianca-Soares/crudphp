<!DOCTYPE HTML>
<html lang="pt_br">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Crud PHP com MySQli</title>

 </head>
 <body>
    <div class="container mt-5">
        <a class="btn btn-primary" href="index.php" role="button" value="editar">Página de cadastro</a>


<?php
echo $_POST['nome_usuario'];
$nome= $_POST['nome_usuario'];
$telefone= $_POST['telefone'];
$endereco= $_POST['endereco'];

        $usuario = array(
            'nome_usuario'  => $nome,
            'telefone'      => $telefone,
            'endereco'      => $endereco
        );
        $query = "INSERT INTO tb_usuario (nome_usuario, telefone, endereco) VALUES ( 'Maria Angela', '91 9999-9999', 'Rua 1, Número 02' )";
        
        $link = DBConnect();
        $result = @mysqli_query($link, $query) or die(mysqli_error($link));
        DBClose($link);
        echo $result;
        //$salva = DBCreate('tb_usuario', $usuario);
       // DBExecute($query);
    
require('index.php');   
    

       /* $sql_add="INSERT INTO `tb_usuario` ( `nome_usuario`, `telefone`, `endereco`) VALUES ('$nome_add', '$quant_add', '$preco_add', '$subtotal_add')";
         $resp_add= @mysqli_query($conexao,$sql_add);
        
         if($resp_add){ 
             echo '<script>alert("ADCIONADO")</script> ';
          
        }else{
            echo"erro";
              echo mysqli_error($conexao);
         }('location: ../formlogin.php');
           exit;  
        }
      */ 
    ?>
    </div>    

 </body>
</html>