<?php
    require_once('..\model\conf-data-base.php');
    require_once('..\model\boletim.php');
    include('../view/conf-bootstrap-web.php');

    $boletim = new Boletim;
    $boletins = $boletim->ListarBoletins();

    foreach ($boletins as $itens) {
        extract($itens);
        echo "
            <div class='row'>
                <div class='col-sm-3  py-3'>
                    $Nome_Do_Criador
                </div>
                <div class='col-sm-6 text-center py-3'>
                    $Titulo
                </div>
                <div class='col-sm-3 py-3'>
                    $Setor_Do_Criador
                </div>
            </div>
            <hr>
        ";
    }
?>