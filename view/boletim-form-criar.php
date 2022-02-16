<?php
    include('conf-bootstrap-web.php');
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
        <form action="" method="post">
            <div class="row mb-5">
                <input type="text" class="form-control" placeholder="Titulo Do Boletim" name="tituloDoBoletim" id="tituloDoBoletim">
            </div>
            <div class="row mb-5">
                <textarea class="form-control" name="conteudoDoBoletim" id="conteudoDoBoletim" cols="30" rows="10" placeholder="Escreva a mensagem aqui..."></textarea>
            </div>
            <div class="row  position-relative">
                <a class="col-sm-3 btn btn-outline-danger me-md-2" onClick="history.go(-1)">
                    CANCELAR
                </a>
                <input class="col-sm-3 btn btn-outline-warning me-md-2" type="reset" value="LIMPAR">
                <input class="col-sm-3 btn btn-success me-md-2 position-absolute top-50 end-0" type="submit" value="POSTAR">
            </div>
        </form>
    </div>
</div>

