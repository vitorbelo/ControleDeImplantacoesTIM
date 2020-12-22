<?php
$Colaborador = $_POST['Colaborador'];
$Concessionaria = $_POST['Concessionaria'];
$prioridade = $_POST['Prioridade'];
$Mesref = $_POST['Mesref'];
$Quantidade = $_POST['Quantidade'];
$Local = $_POST['Local'];
$Observacoes = $_POST['Observacoes'];

// echo $Colaborador;

    require_once "sistema-controleDAO.php";
    conecta("local");

    $dataCad = date('Y-m-d');
    //$dataCad = date('Y-m-d H:i:s', strtotime('-1 Hour', strtotime($dataCad)));

    //formatação mes p/ tabela

    

$sql = "INSERT INTO controle_implantacoes (datainput,colaborador,concess,cod_prioridade,mesref,qtd,`local`,observacao) VALUES ";
    $sql .= "('{$dataCad}', '$Colaborador', '$Concessionaria', '$prioridade', '2020-12-01', '$Quantidade', '$Local', '$Observacoes')";
    echo $sql;
    mysql_query($sql) or die("Erro ao tentar cadastrar registro");
    mysql_close();
    echo "Separação adicionada!";

    ?>