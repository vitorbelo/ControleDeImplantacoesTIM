<?php 
header("Content-Type: text/html; charset=utf-8", true);
?>

<html lang="en">

<head>
    <title>Controle Implantação</title>
    <link rel="sortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />;
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Controle implantações - TIM.</title>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>



</head>

<body>

    <?php
    
$dataCad =  date('Y-m-d H:i:s');
$dataCad = date('Y-m-d H:i:s', strtotime('-1 Hour', strtotime($dataCad)));

require_once "sistema-controleDAO.php";
conecta("local");

                        $query = "SELECT * from controle_implantacoes";
    $result = mysql_query($query);
    while($fetch = mysql_fetch_row($result)){
        echo "<p>";
        foreach ($fetch as $value){
            // echo $value . " | ";
        }
        // echo "</p>";
    }

?>

    <h1>Controle de implantações - TIM</h1>
    <div class="row">
        <div class="col">
            <div class="tabs">
                <div class="tab">
                    <input type="checkbox" id="chck1">

                    <label class="tab-label" for="chck1">
                        <div class="blobs-container">
                            <div class="blob green"></div>
                        </div>Implantação robo - TIM.
                    </label>
                    <div class="tab-content">
                        <button class="bubbly-button" onclick="abrir('addseparacoes.php')">+ Adicionar separação.</button>
                        <!--                        <button class="bubbly-button"><a href="http://www.w3schools.com/html/" target="_blank">+ Adicionar separação.</a> </button>-->
                        <table class="table-fill">
                            <thead>
                                <tr>
                                    <th class="text-left">Data</th>
                                    <th class="text-left">Colaborador</th>
                                    <th class="text-left">Concessionarias</th>
                                    <th class="text-left">Prioridade</th>
                                    <th class="text-left">Mes Ref</th>
                                    <th class="text-left">Qtd</th>
                                    <th class="text-local">Local</th>
                                    <th class="text-left">Responsável</th>
                                    <th class="text-left">Status</th>
                                    <th class="text-left">Observação</th>
                                    <th class="text-left">Data de implantação</th>
                                    <th class="text-left">Qtd implantada</th>
                                </tr>
                            </thead>
                            <tbody class="table-hover">
                                <tr>
                                <?php
                                    while ($row = ibase_fetch_object ($query)) { 
                                        echo '</tr>';
                                        echo '<td>' . $row->id . '</td>';
                                        echo '<td>' . $row->datainput . '</td>'; 
                                        echo '<td>' . $row->colaborador . '</td>';
                                        echo '<td>' . $row->concess . '</td>';
                                        echo '<td>' . $row->prioridade . '</td>';
                                        echo '<td>' . $row->mesref . '</td>';
                                        echo '<td>' . $row->qtd . '</td>';
                                        echo '<td>' . $row->local . '</td>';
                                        echo '<td>' . $row->responsavel . '</td>';
                                        echo '<td>' . $row->status . '</td>';
                                        echo '<td>' . $row->observacao . '</td>';
                                        echo '<td>' . $row->dataimplantacao . '</td>';
                                        echo '<td>' . $row->qtdimplantada . '</td>';
                                    }

                                    ibase_free_result($query); 

                                    ibase_close($sql_connect);

                                    ?>
                                    <td class="text-left"><?= $datainput ?></td>
                                    <td class="text-left"><?= $colaborador ?></td>
                                    <td class="text-left"><?= $concess ?></td>
                                    <td class="text-left"><?= $prioridade ?></td>
                                    <td class="text-left"><?= $mesref ?></td>
                                    <td class="text-left"><?= $qtd ?></td>
                                    <td class="text-local"><?= $local ?></td>
                                    <td class="text-left"><?= $responsavel?></td>
                                    <td class="text-left"><?= $status ?></td>
                                    <td class="text-left"><?= $observacao ?></td>
                                    <td class="text-left"><?= $dataimplantacao ?></td>
                                    <td class="text-left"><?= $qtdimplantada ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab">
                    <input type="checkbox" id="chck2">
                    <label class="tab-label" for="chck2">
                    <div class="blobs-container">
                            <div class="blob green"></div>
                        </div>Implantações Concluídas.
                    </label>
                    <div class="tab-content">
                        <table class="table-fill">
                            <thead>
                                <tr>
                                    <th class="text-left">Data</th>
                                    <th class="text-left">Colaborador</th>
                                    <th class="text-left">Concessionarias</th>
                                    <th class="text-left">Prioridade</th>
                                    <th class="text-left">Mes Ref</th>
                                    <th class="text-left">Qtd</th>
                                    <th class="text-local">Local</th>
                                    <th class="text-left">Responsável</th>
                                    <th class="text-left">Status</th>
                                    <th class="text-left">Observação</th>
                                    <th class="text-left">Data de implantação</th>
                                    <th class="text-left">Qtd implantada</th>
                                </tr>
                            </thead>
                            <tbody class="table-hover">
                                <tr>
                                    <td class="text-left">01/01/2020</td>
                                    <td class="text-left">Vitor</td>
                                    <td class="text-left">Celpe</td>
                                    <td class="text-left">PRIORIDADE PM</td>
                                    <td class="text-left">12/2020</td>
                                    <td class="text-left">500</td>
                                    <td class="text-local">Z:\Tim\Concessionarias Faturas\CELPE - AGRUPADA\2020\11_2020\2ª Separação</td>
                                    <td class="text-left">Vitor</td>
                                    <td class="text-left">Implantando</td>
                                    <td class="text-left"> </td>
                                    <td class="text-left">11/12/2020</td>
                                    <td class="text-left">500</td>
                                </tr>
                                <tr>
                                    <td class="text-left">01/01/2020</td>
                                    <td class="text-left">Vitor</td>
                                    <td class="text-left">CEPISA</td>
                                    <td class="text-left">PRIORIDADE PM</td>
                                    <td class="text-left">12/2020</td>
                                    <td class="text-left">246</td>
                                    <td class="text-local">Y:\Tim\Concessionarias Faturas\CEPISA (EQUATORIAL_PI) - AGRUPADA\2020\11_2020\1ª Separação renomear</td>
                                    <td class="text-left">Vitor</td>
                                    <td class="text-left">Convertendo</td>
                                    <td class="text-left"> </td>
                                    <td class="text-left">11/12/2020</td>
                                    <td class="text-left">250</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab">
                    <input type="checkbox" id="chck3">
                    <label class="tab-label" for="chck3">
                    <div class="blobs-container">
                            <div class="blob green"></div>
                        </div>Downloads Robo.
                    </label>
                    <div class="tab-content">
                    <!-- Botão!!!!!! -->
                        <table class="table-fill">
                            <thead>
                                <tr>
                                    <th class="text-left">Status</th>
                                    <th class="text-left">Data início</th>
                                    <th class="text-left">Concessionaria</th>
                                    <th class="text-left">Responsável</th>
                                    <th class="text-left">Máquina</th>
                                    <th class="text-left">Mês/Ano</th>
                                    <th class="text-local">Qtd baixando</th>
                                    <th class="text-left">Oservações</th>
                                    <th class="text-left">Qtd total/Qtd baixada</th>
                                    <th class="text-left">Relatório de Unidades</th>

                                </tr>
                            </thead>
                            <tbody class="table-hover">
                                <tr>
                                    <td class="text-left">Baixando</td>
                                    <td class="text-left">14/12/2020</td>
                                    <td class="text-left">CELPE</td>
                                    <td class="text-left">Vitor</td>
                                    <td class="text-left">Tim robo 03</td>
                                    <td class="text-left">novembro/2020</td>
                                    <td class="text-left">102</td>
                                    <td class="text-left"> </td>
                                    <td class="text-left">100/100/50</td>
                                    <td class="text-left">Z:\Tim\- FATURAS BAIXAR\BAIXAR ROBO\14.12.2020</td>

                                </tr>
                                <tr>
                                    <td class="text-left">Baixando</td>
                                    <td class="text-left">14/12/2020</td>
                                    <td class="text-left">CELPE</td>
                                    <td class="text-left">Vitor</td>
                                    <td class="text-left">Tim robo 03</td>
                                    <td class="text-left">novembro/2020</td>
                                    <td class="text-left">102</td>
                                    <td class="text-left"> </td>
                                    <td class="text-left">100/100/50</td>
                                    <td class="text-left">Z:\Tim\- FATURAS BAIXAR\BAIXAR ROBO\14.12.2020</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab">
                    <input type="checkbox" id="chck4">
                    <label class="tab-label" for="chck4">
                    <div class="blobs-container">
                            <div class="blob green"></div>
                        </div>Relatórios.
                    </label>
                    <div class="tab-content">
                        <div class="container777">
                            <div class="col-md-8 col-md-offset-2">
                                <h3>Relatório de implantação</h3>
                                <form method="POST" action="#" enctype="multipart/form-data">
                                    <!-- COMPONENT START -->
                                    <div class="form-group">
                                        <div class="input-group input-file" name="Fichier1">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default btn-choose" type="button">Arquivo</button>
                                                <input type="text" class="form-control" placeholder='Choose a file...' />
                                                <button type="submit" class="btn btn-primary pull-right" disabled>Enviar</button>
                                            </span>
                                            <input type="text" class="form-control" placeholder='Choose a file...' />
                                        </div>
                                    </div>
                                    <p>Subir o relatório para o servidor.
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="made-with-love">
        Made with
        <i>☄️</i> by
        <a target="_blank" href="">Vitor Belo</a>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
