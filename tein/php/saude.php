<?php
header('Content-type: text/html; charset=utf-8');

if (isset($_POST)):
    $sus    = (isset($_POST['sus']))? $_POST['sus']: '';
    $doencaCardiaca   = (isset($_POST['doencaCardiaca']))? $_POST['doencaCardiaca']: '';
    $peso = (isset($_POST['peso']))? $_POST['peso']: '';
    $doencaRespiratoria     = (isset($_POST['doencaRespiratoria']))? $_POST['doencaRespiratoria']: '';
    $problemaRins     = (isset($_POST['problemaRins']))? $_POST['problemaRins']: '';
    $fumante     = (isset($_POST['fumante']))? $_POST['fumante']: '';
    $mudanca     = (isset($_POST['mudanca']))? $_POST['mudanca']: '';
    $alcool     = (isset($_POST['alcool']))? $_POST['alcool']: '';
    $diabetes     = (isset($_POST['diabetes']))? $_POST['diabetes']: '';
    $drogas     = (isset($_POST['drogas']))? $_POST['drogas']: '';
    $avcDerrame     = (isset($_POST['avcDerrame']))? $_POST['avcDerrame']: '';   
    $hipertenso     = (isset($_POST['hipertenso']))? $_POST['hipertenso']: '';
    $cancer     = (isset($_POST['cancer']))? $_POST['cancer']: '';   
    // Valida se foram preenchidos todos os campos
    echo $sus . "sus ";
    echo $doencaCardiaca . "doenCar ";
    echo $peso . "pe ";
    echo $doencaRespiratoria . "doenRes ";
    echo $problemaRins . "problema r ";
    echo $fumante . "fuma ";
    echo $mudanca . "mud ";
    echo $alcool . "alcoo ";
    echo $cancer . " can";
    if (empty($sus) || empty($doencaCardiaca) || empty($peso) || empty($doencaRespiratoria) || empty($problemaRins)):
        $array  = array('tipo' => 'alert alert-danger', 'mensagem' => 'Preencher todos os campos obrigat�rios(*)!');
        echo json_encode($array);
    else:

        // Grava no banco de dados as informa��es do contato
        $opcoes = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');

        $pdo = new PDO('mysql:host=localhost;dbname=db_blog', 'root', '', $opcoes);

        $sql = "INSERT INTO saude (sus, doencaCardiaca, peso, doencaRespiratoria, problemaRins, fumante, mudanca, alcool, diabetes, drogas, avcDerrame, hipertenso, cancer)VALUES(:sus, :doencaCardiaca, :peso, :doencaRespiratoria, :problemaRins, :fumante, :mudanca, :alcool, :diabetes, :drogas, :avcDerrame, :hipertenso, :cancer)";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(':sus', $sus);
        $stm->bindValue(':doencaCardiaca', $doencaCardiaca);
        $stm->bindValue(':peso', $peso);
        $stm->bindValue(':doencaRespiratoria', $doencaRespiratoria);
        $stm->bindValue('problemaRins', $problemaRins);
        $stm->bindValue('fumante', $fumante);
        $stm->bindValue('mudanca', $mudanca);
        $stm->bindValue('alcool', $alcool);
        $stm->bindValue('diabetes', $diabetes);
        $stm->bindValue('drogas', $drogas);
        $stm->bindValue('avcDerrame', $avcDerrame);
        $stm->bindValue('hipertenso', $hipertenso);
        $stm->bindValue('cancer', $cancer);
        $stm->execute();



    endif;
endif;

?>