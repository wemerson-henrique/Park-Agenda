<?php 
    include('conf-bootstrap-web.php')
?>
<link rel="stylesheet" href="css/style-login.css">
<div class="container">
    <div class="m-auto" style="width: 18rem;min-width: 300px;">
        <form action="..\controller\logar.php" method="post" class="form">
            <div>
                <figure class="figure">
                    <img src="imagens/logParkAgenda.png" class="figure-img img-fluid rounded" alt="Log do site Park Agenda. A logo é semelhante um trevo e tem escrito no topo Park Agenda">
                </figure>
            </div>
            <div class="row">
                <input class="form-control" type="text" name="nomeDeUsuario" id="nomeDeUsuario" placeholder="Nome">
            </div>
            <div class="row">
                <input class="form-control" type="password" name="senhaDoUsuario" id="senhaDoUsuario" placeholder="Senha">
            </div>
            <div class="row">
                <input class="btn btn-success" type="submit" name="Logar" value="LOGAR">
            </div>
            <div class="row mt-3">
                <p>Caso não tenha acesso entre em contato com o desenvolvedor de TI.</p>
            </div>       
        </form>
    </div>
</div>