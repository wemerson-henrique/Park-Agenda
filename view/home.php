<?php 
    include('conf-bootstrap-web.php');
?>
<?php 
    include('header.php');
?>
<div class="card-body">
    <div class="row">
        <div class="col mx-auto text-center">
            <figure class="figure">
                <img src="imagens/logParkAgenda.png" class="figure-img img-fluid rounded" alt="Log do site Park Agenda.
                A logo é semelhante um trevo e tem escrito no topo Park Agenda">
            </figure>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card bg-dark text-white">
                <img class="card-img" src="imagens/img-map.png" alt="Imagem do card">
                <div class="card-img-overlay">
                    <h5 class="card-title">Mapa</h5>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card bg-dark text-white">
                <img class="card-img" src="imagens/administracao.jpg" alt="Imagem do card">
                <div class="card-img-overlay">
                    <h5 class="card-title">Administração</h5>
                </div>
            </div>
        </div>
        <div class="col-4">
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