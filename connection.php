<?php
//função para fechar a conexão com o banco
function DBClose(){
    @mysqli_close($link) or die(mysqli_error($link));
}

function DBConnect(){
    $link = @mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_connect_error());
}

?>