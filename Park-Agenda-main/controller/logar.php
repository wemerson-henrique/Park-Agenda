<?php
    require_once('..\model\conf-data-base.php');
    require_once('..\model\logar.php');

    $formDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (!empty($formDados['Logar'])) {
        $logar = new Logar();
        $logar->formDados = $formDados;
        $validar = $logar->Logar();
        if (!empty($validar)) {
            foreach ($validar as $itens) {
                extract($itens);
                session_start();
                $_SESSION['id'] = $ID;
                $_SESSION['usuario'] = $Usuario;
            }
            header('location:..\view\home.php');
        } else {
            echo '<script language="javascript">
            if (confirm("Desculpe! Voçê não é cadastrado.")) {
            }
            </script>';
            header('location:..\view\login.php');
        }
        
    } else {
        echo '<script language="javascript">alert("Preencha o furmulario de login!");</script>';
    }
    
?>