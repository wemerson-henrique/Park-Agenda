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
    <div class="card-body">
        <div class="row">
            <p>
                Clique no botão para criar um boletim.
            </p>
        </div>
        <div class="d-flex flex-row-reverse bd-highlight">
            <a href="boletim-form-criar.php" >
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
            </a>
        </div>
    </div>
</div>