<?php
header('Content-type: text/html; charset=utf-8');
if (isset($_POST)):
    $sus     = (isset($_POST['sus']))? $_POST['sus']: '';
    $tempoRua     = (isset($_POST['tempoRua']))? $_POST['tempoRua']: '';
    $alimentaAoDia     = (isset($_POST['alimentaAoDia']))? $_POST['alimentaAoDia']: '';
    $origemAlimentacao     = (isset($_POST['origemAlimentacao']))? $_POST['origemAlimentacao']: '';
    $higienePessoal     = (isset($_POST['higienePessoal']))? $_POST['higienePessoal']: '';
    $recebeBeneficio     = (isset($_POST['recebeBeneficio']))? $_POST['recebeBeneficio']: '';
    $refFamiliar     = (isset($_POST['refFamiliar']))? $_POST['refFamiliar']: '';
    // Valida se foram preenchidos todos os campos
    if (empty($sus) || empty($tempoRua) || empty($alimentaAoDia) || empty($origemAlimentacao) || empty($higienePessoal) ):
        $array  = array('tipo' => 'alert alert-danger', 'mensagem' => 'Preencher todos os campos obrigat�rios(*)!');
        echo json_encode($array);
    else:
        
        // Grava no banco de dados as informa��es do contato
        $opcoes = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');

        $pdo = new PDO('mysql:host=localhost;dbname=db_blog', 'root', '', $opcoes);

        $sql = "INSERT INTO moradorderua (sus, tempoRua, alimentaAoDia, origemAlimentacao, higienePessoal, recebeBeneficio, refFamiliar)VALUES(:sus, :tempoRua,:alimentaAoDia, :origemAlimentacao, :higienePessoal, :recebeBeneficio, :refFamiliar)";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(':sus', $sus);
        $stm->bindValue(':tempoRua', $tempoRua);
        $stm->bindValue(':alimentaAoDia', $alimentaAoDia);
        $stm->bindValue(':origemAlimentacao', $origemAlimentacao);
        $stm->bindValue(':higienePessoal', $higienePessoal);
        $stm->bindValue(':recebeBeneficio', $recebeBeneficio);
        $stm->bindValue(':refFamiliar', $refFamiliar);
        $stm->execute();

    endif;
endif;

?>