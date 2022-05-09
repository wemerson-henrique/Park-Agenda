<?php
    use PHPUnit\Framework\TestCase;
    require_once('..\..\model\boletim.php');

    class BoletinsTest extends TestCase{
        // public function testCadastrarBoletimComSucesso(){
        //     $boletimParaTeste = array(
        //         'ID' => '',
        //         'idDoCriador' => 3,
        //         'Nome_Do_Criador' => 'TestesUnitarios',
        //         'Setor_Do_Criador' => 'Testes',
        //         'dataDaCriacao' => '00/00/0000',
        //         'Titulo' => 'Teste',
        //         'Mensagem' => 'Execução de teste unitario',
        //     );
        //     $boletim = new Boletim();
        //     $boletim->formDados = $boletimParaTeste;
        //     $this->assertEquals(TRUE,$boletim->Cadastrar());
        // }
        // public function testCadastrarBoletimSemSucesso(){
        //     $boletimParaTeste = array(
        //         'ID' => '',
        //         'idDoCriador' => '',
        //         'Nome_Do_Criador' => '',
        //         'Setor_Do_Criador' => '',
        //         'dataDaCriacao' => '',
        //         'Titulo' => '',
        //         'Mensagem' => '',
        //     );
        //     $boletim = new Boletim();
        //     $boletim->formDados = $boletimParaTeste;
        //     $this->assertEquals(False,$boletim->Cadastrar());
        // }
        public function testListarBoletinsComSucesso(){
            $boletim = new Boletim;
            $this->assertEquals(TRUE,!empty($boletim->ListarBoletins()));
        }
        public function testVisualizarBoletimComSucesso(){
            $idBoletim = array(
                'id' => '3'
            );
            $boletim = new Boletim();
            $boletim->formDados = $idBoletim;
            $this->assertEquals(TRUE,!empty($boletim->VisualizarBoletim()));
        }
        public function testVisualizarBoletimSemSucesso(){
            $idBoletim = array(
                'id' => ''
            );
            $boletim = new Boletim();
            $boletim->formDados = $idBoletim;
            $this->assertEquals(FALSE,!empty($boletim->VisualizarBoletim()));
        }
        public function testListarBoletinsParaExcluirComSucesso(){
            $boletim = new Boletim;
            $this->assertEquals(TRUE,!empty($boletim->ListarBoletinsParaExcluir(3)));
        }
        public function testListarBoletinsParaExcluirComSucessoVazio(){
            $boletim = new Boletim;
            $this->assertEquals(FALSE,!empty($boletim->ListarBoletinsParaExcluir(4)));
        }
        // public function testExcluirBoletimComSucesso(){
        //     $idBoletim = array(
        //         'ID' => '24'
        //     );
        //     $boletim = new Boletim();
        //     $boletim->formDados = $idBoletim;
        //     $this->assertEquals(TRUE,!empty($boletim->ExcluirBoletim()));
        // }        
        public function
        testExcluirBoletimSemSucesso(){
            $idBoletim = array(
                'ID' => '21'
            );
            $boletim = new Boletim();
            $boletim->formDados = $idBoletim;
            $this->assertEquals(FALSE,!empty($boletim->ExcluirBoletim()));
        }
        // public function testAtualizarComSucesso(){
        //     $boletimParaTeste = array(
        //         'idBoletim' => '18',
        //         'Titulo' => 'Teste Alterado',
        //         'Mensagem' => 'Execução de teste unitario alterado.',
        //     );
        //     $boletim = new Boletim();
        //     $boletim->formDados = $boletimParaTeste;
        //     $this->assertEquals(TRUE,$boletim->Atualizar());
        // }
        // public function testAtualizarSemSucesso(){
        //     $boletimParaTeste = array(
        //         'idBoletim' => '18',
        //         'Titulo' => 'Teste Alterado',
        //         'Mensagem' => 'Execução de teste unitario alterado.',
        //     );
        //     $boletim = new Boletim();
        //     $boletim->formDados = $boletimParaTeste;
        //     $this->assertEquals(FALSE,$boletim->Atualizar());
        // }
    }
?>