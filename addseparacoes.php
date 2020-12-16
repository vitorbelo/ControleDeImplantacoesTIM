<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Pop-out - Adicionar Separações.</title>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="script.js"></script>

</head>

<body>
<?php
            $dataCad =  date('Y-m-d H:i:s');
            $dataCad = date('Y-m-d H:i:s', strtotime('-1 Hour', strtotime($dataCad)));
            ?>
    <div class="container">
        <form id="contact" action="" method="post">
            <h3>Adionar separações</h3>
            <h4>Preencha todos os campos para inserção dos dados para planilha.</h4>


            <h2><?php
            $dataCad 
            ?></h2>
            <!-- <fieldset>
                <input placeholder="Data" type="date" tabindex="1" required autofocus> 
            </fieldset> -->
            <fieldset>
                <input placeholder="Colaborador" type="text" tabindex="1" required>
            </fieldset>
            <fieldset>
                <input placeholder="Concessionaria" type="text" tabindex="2" required>
            </fieldset>
            <fieldset>
            <select name="prioridade" id="prio" tabindex="3" required>
                <option value="1">PAGAMENTO MANUAL</option>
                <option value="2">PRIORIDADE ALTA</option>
                <option value="3">PRIORIDADE BAIXA</option>
                <option value="4">PRIORIDADE MÉDIA</option>
            </select>
                <!-- <input placeholder="Prioridade" type="prioridade" tabindex="4" required> -->
            </fieldset>
            <fieldset>
                <input placeholder="Mes Ref" type="text" tabindex="4" required>
            </fieldset>
            <fieldset>
                <input placeholder="Quantidade" type="text" tabindex="5" required>
            </fieldset>
            <fieldset>
                <input placeholder="Local" type="text" tabindex="6" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Observações" type="text" tabindex="7"></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Adicionar</button>
            </fieldset>
        </form>


    </div>
</body></html>