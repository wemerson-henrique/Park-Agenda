<?php
    require_once('..\model\conf-data-base.php');
    require_once('..\model\boletim.php');

    $formDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (!empty($formDados['SendCaduser'])) {
        $boletim = new Boletim();
        $boletim->formDados = $formDados;
        $valor = $boletim->Cadastrar();
        if ($valor) {
            header('Location:..\view\boletins.php');
        } elseif (!empty($formDados['SendCaduser'])) {
            echo"ERRO: Boletim não Publicado!";
        }
        
    }else{
        echo"Preencha os campos por favor!";
    }
?>