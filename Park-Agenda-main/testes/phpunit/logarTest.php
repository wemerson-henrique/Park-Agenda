<?php
use PHPUnit\Framework\TestCase;
require_once('..\..\model\logar.php');
require_once('..\..\model\conf-data-base.php');

class LogarTest extends TestCase{

    public function testLogarComSucesso(){
        $logar = new Logar();
        $formDados = array(
           'nomeDeUsuario'=>'wemerson',
           'senhaDoUsuario'=>'123'
        );
        $logar->formDados = $formDados;
        $this->assertEquals(TRUE, !empty($logar->Logar()));
    }
    public function testLogarSemSucesso(){
        $logar = new Logar();
        $formDados = array(
           'nomeDeUsuario'=>'',
           'senhaDoUsuario'=>''
        );
        $logar->formDados = $formDados;
        $this->assertEquals(FALSE, !empty($logar->Logar()));
    }
    public function testResultadoDaBuscaNoBancoDeDados(){
        $logar = new Logar();
        $formDados = array(
           'nomeDeUsuario'=>'wemerson',
           'senhaDoUsuario'=>'123'
        );
        $logar->formDados = $formDados;
        $validar = $logar->Logar();
        $id;
        $nome;
        $usuario;
        $contador = 0;
        foreach ($validar as $itens) {
            extract($itens);
            $id = $ID;
            $nome = $Nome;
            $usuario = $Usuario;
            $contador = $contador+1;
        }
        $this->assertEquals(2, $id);
        $this->assertEquals('Wemerson', $nome);
        $this->assertEquals('wemerson', $usuario);
        $this->assertEquals(1, $contador);
    }
}
?>