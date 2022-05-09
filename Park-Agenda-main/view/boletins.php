<?php
    include('conf-bootstrap-web.php');
	include_once('..\controller\verificar-sessao.php');
?>
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-start">
            <a href="..\view\home.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
            </a>
        </div>
        <h5 class="card-title d-flex justify-content-center">Novos Boletins de Noticia</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <a class="col-sm-4 btn btn-success" href="#">
                Novos
            </a>
            <a class="col-sm-4 btn btn-success" href="boletins-criar-page.php">
                Criar
            </a>
            <a class="col-sm-4 btn btn-success" href="boletins-excluir-page.php">
                Excluir
            </a>
        </div>

        <?php include('..\controller\listar-boletim.php'); ?>
        
    </div>
</div>
<?php 
    include('footer.php');
?>