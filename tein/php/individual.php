<?php
header('Content-type: text/html; charset=utf-8');

if (isset($_POST)):
    $sus     = (isset($_POST['sus']))? $_POST['sus']: '';
    $parentesco    = (isset($_POST['parentesco']))? $_POST['parentesco']: '';
    $escolaridade   = (isset($_POST['escolaridade']))? $_POST['escolaridade']: '';
    $genero = (isset($_POST['genero']))? $_POST['genero']: '';
    $deficiencia     = (isset($_POST['deficiencia']))? $_POST['deficiencia']: '';
    $criancaFicaCom     = (isset($_POST['criancaFicaCom']))? $_POST['criancaFicaCom']: '';
    $planoDeSaude     = (isset($_POST['planoDeSaude']))? $_POST['planoDeSaude']: '';
    $mudanca     = (isset($_POST['mudanca']))? $_POST['mudanca']: '';
    $obito     = (isset($_POST['obito']))? $_POST['obito']: '';
    // Valida se foram preenchidos todos os campos
    if (empty($parentesco) || empty($escolaridade) || empty($genero) || empty($sus) || empty($deficiencia) || empty($criancaFicaCom)):
        $array  = array('tipo' => 'alert alert-danger', 'mensagem' => 'Preencher todos os campos obrigat�rios(*)!');
        echo json_encode($array);
    else:

        // Grava no banco de dados as informa��es do contato
        $opcoes = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');

        $pdo = new PDO('mysql:host=localhost;dbname=db_blog', 'root', '', $opcoes);

        $sql = "INSERT INTO individual (sus, parentesco, escolaridade, genero, deficiencia, criancaFicaCom, planoDeSaude, mudanca, obito)VALUES( :sus,:parentesco, :escolaridade, :genero,  :deficiencia, :criancaFicaCom, :planoDeSaude, :mudanca, :obito)";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(':sus', $sus);
        $stm->bindValue(':parentesco', $parentesco);
        $stm->bindValue(':escolaridade', $escolaridade);
        $stm->bindValue(':genero', $genero);
        $stm->bindValue('deficiencia', $deficiencia);
        $stm->bindValue('criancaFicaCom', $criancaFicaCom);
        $stm->bindValue('planoDeSaude', $planoDeSaude);
        $stm->bindValue('mudanca', $mudanca);
        $stm->bindValue('obito', $obito);
        $stm->execute();


    endif;
endif;

?>