<?php
    include('conf-bootstrap-web.php');
    include('..\controller\verificar-sessao.php');
?>
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-start">
            <?php
                include('componentes/botao-voltar-pagina.php');
            ?>
        </div>
        <h5 class="card-title d-flex justify-content-center">Criar Nova Noticia</h5>
    </div>
    <div class="card-body px-5 py-5">
        <form action="..\controller\cadastra-boletim.php" method="post">
            <input type="hidden" name="idDoCriador" value="<?php echo $_SESSION['id']; ?>">
            <input type="hidden" name="dataDaCriacao" value="<?php echo date('d/m/Y'); ?>">
            <div class="row mb-5">
                <input type="text" class="form-control" placeholder="Titulo Do Boletim" name="Titulo" id="Titulo">
            </div>
            <div class="row mb-5">
                <textarea class="form-control" name="Mensagem" id="Mensagem" cols="30" rows="10" placeholder="Escreva a mensagem aqui..."></textarea>
            </div>
            <div class="row  position-relative">
                <a class="col-sm-3 btn btn-outline-danger me-md-2" onClick="history.go(-1)">
                    CANCELAR
                </a>
                <input class="col-sm-3 btn btn-outline-warning me-md-2" type="reset" value="LIMPAR">
                <input name="SendCaduser" class="col-sm-3 btn btn-success me-md-2 position-absolute top-50 end-0" type="submit" value="POSTAR">
            </div>
        </form>
    </div>
</div>

