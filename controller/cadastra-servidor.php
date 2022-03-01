<?php
    require_once('..\model\conf-data-base.php');
    require_once('..\model\servidor.php');

    $dadosDoFormulario = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (!empty($dadosDoFormulario['SendCaduser'])) {
        $servidor = new Servidor();
        $servidor->dadosDoFormulario = $dadosDoFormulario;
        $veru = $servidor->Username();
        if ($veru) {
            echo '<script language="javascript">alert("Nome de usuario existente");</script>';
            echo"sucesso no cadastro";
        } elseif (!empty($formDados['SendCaduser'])) {
            $servidor = new Servidor();
            $servidor->dadosDoFormulario = $dadosDoFormulario;
            $valor = $servidor->Cadastrar();
            if ($valor) {
                echo '<script language="javascript">alert("Usuario cadastrado com sucesso!");</script>';
            } else {
                echo '<script language="javascript">alert("ERRO: Usuário não cadastrado!");</script>';
            }
            
        }
        
    }
?>