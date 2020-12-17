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
    $dataCad = date('Y-m-d H:i:s');
    $dataCad = date('Y-m-d H:i:s', strtotime('-1 Hour', strtotime($dataCad)));
    ?>
    <div class="container">
        <form id="contact" action="inserir.php" method="post">
            <h3>Adicionar separações</h3>
            <h4>Preencha todos os campos para inserção dos dados para planilha.</h4>

            <!-- <fieldset>
                <input placeholder="Data" type="date" tabindex="1" required autofocus> 
            </fieldset> -->
            <fieldset>
                <input name ="Colaborador" placeholder="Colaborador" type="text" tabindex="1" required>
            </fieldset>
            <fieldset>
                <input name ="Concessionaria" placeholder="Concessionaria" type="text" tabindex="2" required>
            </fieldset>
            <fieldset>
                <select name="Prioridade" id="Prioridade" tabindex="3" required>
                    <option value="1">PAGAMENTO MANUAL</option>
                    <option value="2">PRIORIDADE ALTA</option>
                    <option value="3">PRIORIDADE BAIXA</option>
                    <option value="4">PRIORIDADE MÉDIA</option>
                </select>
                <!-- <input placeholder="Prioridade" type="prioridade" tabindex="4" required> -->
            </fieldset>
            <fieldset>
                <input name ="Mesref" placeholder="Mes ref" type="text" tabindex="4" required>
            </fieldset>
            <fieldset>
                <input name ="Quantidade" placeholder="Quantidade" type="text" tabindex="5" required>
            </fieldset>
            <fieldset>
                <input name ="Local" placeholder="Local" type="text" tabindex="6" required>
            </fieldset>
            <fieldset>
                <textarea name ="Observacoes" placeholder="Observações" type="text" tabindex="7"></textarea>
            </fieldset>
            <fieldset>
                <button onclick="inserir()" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Adicionar</button>
            </fieldset>
        </form>
    </div>

<?php

    
    ?>
    
</body>

</html>
