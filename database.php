
<?php

// Ler Registro
    function DBRead($table, $params = null, $fields = '*'){
        $params = ($params) ? " {$params}" : null; // Se()  então ? senão :
        $query = "SELECT {$fields} FROM {$table}{$params}";
        return $query;
    }

// Salva Registro
    function DBCreate($table, array $data){

        $data = DBEscape($data);

        $fields = implode(', ', array_keys($data));
        $values = "'".implode("', '", $data)."'";

        $query = "INSERT INTO {$table} ({$fields})
        VALUES ({$values})";
        return $query;
    }

//Executa Querys
    function DBExecute($query){
        $link = DBConnect();
        $result = @mysqli_query($link, $query) or die(mysqli_error($link));
        DBClose($link);
        return $result;
    }

?>