<?php
    require_once('..\model\conf-data-base.php');
    require_once('..\model\boletim.php');

    $formDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (!empty($formDados['SendCaduser'])) {
        $boletim = new Boletim();
        $boletim->formDados = $formDados;
        $valor = $boletim->Cadastrar();
        if ($valor) {
            echo '<script language="javascript">alert("Boletim enviado!");</script>';
            echo"Boletim enviado!";
        } elseif (!empty($formDados['SendCaduser'])) {
            echo '<script language="javascript">alert("ERRO: Boletim não enviado!");</script>';
            echo"Boletim não enviado!";
        }
        
    }else{
        echo"Preencha os campos por favor!";
    }
?>