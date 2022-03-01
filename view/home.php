<?php 
    include('conf-bootstrap-web.php');
    include('..\controller\verificar-sessao.php');
?>
<?php 
    include('componentes\header.php');
?>
<div class="card-body">
    <div class="position-relative">
        <div class="position-absolute top-0 end-0">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
            </a>
            <div data-bs-toggle="collapse" data-bs-target="#sair" role="button" aria-expanded="false" aria-controls="sair"><span><?php echo $_SESSION['usuario']; ?></span></div>
            <div class="collapse" id="sair">
                <a href="..\controller\terminar-sessao.php" class="btn btn-danger">
                    SAIR
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col mx-auto text-center">
            <figure class="figure">
                <img src="imagens/logParkAgenda.png" class="figure-img img-fluid rounded" alt="Log do site Park Agenda.
                A logo é semelhante um trevo e tem escrito no topo Park Agenda">
            </figure>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="card bg-dark text-white">
                <img class="card-img" src="imagens/img-map.png" alt="Imagem do card">
                <div class="card-img-overlay">
                    <h5 class="card-title">Mapa</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card bg-dark text-white">
                <img class="card-img" src="imagens/administracao.jpg" alt="Imagem do card">
                <div class="card-img-overlay">
                    <h5 class="card-title">Administração</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="boletins.php">
                <div class="card bg-dark text-white">
                    <img class="card-img" src="imagens/boletins.png" alt="Imagem do card">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Boletins</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php 
    include('footer.php');
?>