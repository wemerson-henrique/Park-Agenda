<link rel="stylesheet" href="..\view\css\style-visualizar-boletim.css">
<?php
    require_once('..\model\conf-data-base.php');
    require_once('..\model\boletim.php');
    require_once('..\controller\verificar-sessao.php');
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
			<?php if($ID_Do_Criador == $_SESSION['id']){ ?>
            <input type="button" value="ALTERAR BOLETIM" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<?php } ?>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form action="..\controller\alterar-boletim.php" method="post">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alterar Boletim</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="idBoletim" value="<?php echo "$ID"; ?>">
                        <div class="row mb-5">
                            <input type="text" class="form-control" value="<?php echo "$Titulo"; ?>" name="Titulo" id="Titulo">
                        </div>
                        <div class="row mb-5">
                            <textarea class="form-control" name="Mensagem" id="Mensagem" cols="30" rows="10">
                                <?php echo "$Mensagem"; ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Cancelar">
                        <input class="btn btn-success" type="submit" name="SendCaduser" value="Salvar Alretação">
                    </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <?php
    }
?>