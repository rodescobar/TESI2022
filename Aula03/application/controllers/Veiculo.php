<?php

    class Veiculo extends CI_Controller {

        public function index() {
            $this->load->model("veiculomodel");

            $teste = $this->veiculomodel->selecionarTodos();

            var_dump($teste);
        }

        public function novo() {

            $marca = $_POST['marca'];
            $modelo = @$_POST['modelo'];
            $valor = $_POST['valor'];
            $ativo = $_POST['ativo'];
            $cor = @$_POST['cor'];

            $data = array(
                "marca" => $marca,
                "modelo" => $modelo,
                "valor" => $valor,
                "estoque" => ($ativo=="on")?(1):(0),
                "cor" => $cor
            );

            $this->load->model("veiculomodel");
            $this->veiculomodel->inserir($data);

        }

        public function formNovo() {
            $this->load->view("veiculo/formNovo");
        }

    }

?>