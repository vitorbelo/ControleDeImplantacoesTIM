<?php 
header("Content-Type: text/html; charset=utf-8", true);
?>

<html lang="en">

<head>
    <link rel="sortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Controle implantações - TIM.</title>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/scss" href="css/style.scss">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
</head>

<body>

    <?php
    function formataData($data)
	{
		if ($data) {
			if($data == "0000-00-00") return "";

			$explode = explode('-', $data);
			return $explode[2] . "/" . $explode[1] . "/" . $explode[0];
		} else {
			return $data;
		}
    }
    
    $dataCad = date('Y-m-d H:i:s');
    $dataCad = date('Y-m-d H:i:s', strtotime('-1 Hour', strtotime($dataCad)));


    require_once "sistema-controleDAO.php";
    conecta("local");
    mysql_set_charset("utf8");

    // $select_fat = mysql_query("SELECT * from controle_implantacoes");
    $select_fat = mysql_query("SELECT c.*, p.prioridade from controle_implantacoes c JOIN prioridade p ON c.cod_prioridade = p.id");

    $result = mysql_fetch_assoc($select_fat);
    $total = mysql_num_rows($select_fat);


    
    // var_dump($result);
    // echo '<br>';

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
                                    <th class="text-data">Data</th>
                                    <th class="text-left">Colaborador</th>
                                    <th class="text-left">Concessionarias</th>
                                    <th class="text-left">Prioridade</th>
                                    <th class="text-data">Mes Ref</th>
                                    <th class="text-left">Qtd</th>
                                    <th class="text-local">Local</th>
                                    <th class="text-left">Responsável</th>
                                    <th class="text-left">Status</th>
                                    <th class="text-left">Observação</th>
                                    <th class="text-left">Data de implantação</th>
                                    <th style="width:100px" class="gg">Qtd implantada</th>
                                </tr>
                            </thead>
                            <tbody class="table-hover">
                                <tr>
                                    <?php
                                    
                                if ($total > 0) {
                                // inicia o loop que vai mostrar todos os dados
                                    do {
                                        ?>
                                <tr>
                                    <td class="text-data"> <?= formataData($result["datainput"]) ?></td>
                                    <td class="text-left"><?= $result["colaborador"] ?></td>
                                    <td class="text-left"><?= $result["concess"] ?></td>
                                    <td class="text-left"><?= $result["prioridade"] ?></td>
                                    <td class="text-data"><?= $result["mesref"] ?></td>
                                    <td class="text-left"><?= $result["qtd"] ?></td>
                                    <td onclick="setClipboard(String.raw`<?= $result["local"]?>`)" class="text-local"><?= $result["local"] ?> </td>
                                    <td class="text-left"><?= $result["responsavel"] ?></td>
                                    <td class="text-left"><?= $result["status"] ?></td>
                                    <td class="text-left"><?= $result["observacao"] ?></td>
                                    <td class="text-left"><?= $result["dataimplantada"] ?></td>
                                    <td class="text-left"><?= $result["qtdimplantada"] ?></td>
                                    <td class="edit-remove"><div class="t-cell collapse-md" data-label="">
                                        <i class="fa fa-pencil-square-o"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div></td>
                                </tr>
                                <?php
                                // finaliza o loop que vai mostrar os dados


                    } while ($result = mysql_fetch_assoc($select_fat));
                            // fim do if


                }
                ?>
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
