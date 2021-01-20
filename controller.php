<?php

$nome= $_POST['nome_usuario'];
$telefone= $_POST['telefone'];
$endereco= $_POST['endereco'];


switch ($acao) {
    case 'adicionar': {

        $usuario = array(
            'nome_usuario'  => $nome,
            'telefone'      => $telefone,
            'endereco'      => $endereco
        );
        
        $salva = DBCreate('tb_usuario', $usuario);
        DBExecute($salva);
    }
}    
require('index.php');   
    
       /* $sql_add="INSERT INTO `tb_usuario` ( `nome_usuario`, `telefone`, `endereco`) VALUES ('$nome_add', '$quant_add', '$preco_add', '$subtotal_add')";
        // $resp_add= @mysqli_query($conexao,$sql_add);
        
        // if($resp_add){ 
        //      echo '<script>alert("ADCIONADO")</script> ';
          
        // }else{
        //     echo"erro";
        //       echo mysqli_error($conexao);
        // }
        INSERT INTO  (, telefone, endereco)
        VALUES ('Bernado Silva', '91 9999-9999', 'Rua Nova, Número 100');('location: ../formlogin.php');
           exit;  
        }
        break; 
    case 'autenticar': {

    }*/
    ?>