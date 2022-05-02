<?php
    require_once('..\model\conf-data-base.php');
    require_once('..\model\boletim.php');
    
    

    $formDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $boletim = new Boletim();
    $boletim->formDados = $formDados;
    $valor = $boletim->ExcluirBoletim();
    if ($valor) {
        header('Location:..\view\boletins.php');
    } else  {
        echo "ERRO: Não foi possivel excluir o boletim.";
    }
?>