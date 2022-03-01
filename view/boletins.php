<?php
    include('conf-bootstrap-web.php');
?>
<style>
    .col-sm-3{
        /*background-color: #92a8d1;*/
    }
    .col-sm-6{
        /*background-color: green;*/
    }
</style>
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-start">
            <?php
                include('componentes/botao-voltar-pagina.php');
            ?>
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
            <a class="col-sm-4 btn btn-success" href="boletins-exclir-page.php">
                Excluir
            </a>
        </div>

        <?php include('..\controller\listar-boletim.php'); ?>
        
    </div>
</div>
<?php 
    include('footer.php');
?>