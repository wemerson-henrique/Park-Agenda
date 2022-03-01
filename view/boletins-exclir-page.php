<?php
    include('conf-bootstrap-web.php');
    include('..\controller\verificar-sessao.php');
?>
<link rel="stylesheet" href="css\style-excluir-boletim.css">
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-start">
            <?php
                include('componentes/botao-voltar-pagina.php');
            ?>
        </div>
        <h5 class="card-title d-flex justify-content-center">Excluir Boletins de Noticia</h5>
    </div>
    <div class="card-body">

        <?php
            require_once('..\model\boletim.php');
        
            $boletim = new Boletim;
            $boletins = $boletim->ListarBoletinsParaExcluir($_SESSION['id']);
            echo"" . $_SESSION['id'];
        
            foreach ($boletins as $itens) {
                extract($itens);
                ?>
                    <form class='row' action='..\controller\excluir-boletim.php' method='post'>
                        <div class='col-sm-3  py-3'>
                            <?php echo $Nome_Do_Criador; ?>
                        </div>
                        <div class='col-sm-6 text-center py-3'>
                            <?php echo$Titulo; ?>
                        </div>
                        <div class='col-sm-2 py-3'>
                           <?php  echo $Setor_Do_Criador; ?>
                        </div>
                        <input  name='ID' type='hidden' value='<?php echo $ID; ?>'>
                        <button class='col-sm-1 py-3 btn btn-danger' type='submit'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='40' height='40' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                            </svg>
                        </button>
                    </form>
                    <hr>
                 <?php 
            }
        ?>

    </div>
</div>
<?php 
    include('footer.php');
?>