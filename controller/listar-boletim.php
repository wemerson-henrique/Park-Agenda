<link rel="stylesheet" href="..\view\css\style-listar-boletim.css">
<?php
    require_once('..\model\conf-data-base.php');
    require_once('..\model\boletim.php');
    include('..\view\conf-bootstrap-web.php');

    $boletim = new Boletim;
    $boletins = $boletim->ListarBoletins();

    foreach ($boletins as $itens) {
        extract($itens);
        ?>
        <form class="row mb-0" action="..\controller\visualizar-boletim.php" method="post">
            <input type="hidden" name="id" value="<?php echo $ID; ?>">
            <button class='row my-3 mx-auto my-auto listarButton py-2' type="submit">
                <div class='aa col-sm-3 py-4'>
                    <?php echo $Nome_Do_Criador; ?>
                </div>
                <div class='aa col-sm-6 text-center py-4'>
                    <?php echo $Titulo; ?>
                </div>
                <div class='aa col-sm-3 py-4'>
                    <?php echo $Setor_Do_Criador; ?>
                </div>
            </button>
        </form>
        <hr class="my-0">
        <?php
    }
?>