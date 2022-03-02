<link rel="stylesheet" href="..\view\css\style-visualizar-boletim.css">
<?php
    require_once('..\model\conf-data-base.php');
    require_once('..\model\boletim.php');
    include('..\view\conf-bootstrap-web.php');

    $formDados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $boletim = new Boletim();
    $boletim->formDados = $formDados;
    $boletins = $boletim->VisualizarBoletim();

    foreach ($boletins as $itens) {
        extract($itens);
        ?>
        <div class="card w-75 mx-auto my-5 row">
            <div class="card-header text-capitalize text-center font-weight-bold">
                <h3><?php echo "$Titulo"; ?></h3>
            </div>
            <div class="card-body">
                <span>Setor:</span>
                <?php echo "$Setor_Do_Criador"; ?>
            </div>
            <div class="card-body">
                <form action="">
                    <textarea class="form-control" name="Mensagem" id="Mensagem" cols="30" rows="10" disabled>
                        <?php echo "$Mensagem"; ?>
                    </textarea>
                </form>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-10">
                        <?php echo "$Nome_Do_Criador"; ?>
                    </div>
                    <div class="col-md-2">
                        <?php echo "$Data_Da_Criacao"; ?>
                    </div>
                </div>                
            </div>
        </div>
        <?php
    }
?>