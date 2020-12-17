<?php

function conecta($tipo, $exibir = false)
{
    if ($tipo == 'local') {
        @$link = mysql_connect('localhost', 'root', '');
    } else{
        @$link = mysql_connect('179.127.13.31:3306', 'tim_producao', 'kFvJ5Nlb8pwAZDeG');
    }

    if ($link == false) {
        echo "Erro de conexao com o banco " . $tipo;
        die(mysql_error($link));
    }

    @mysql_select_db('sistemadecontrole', $link);
    
}

?>