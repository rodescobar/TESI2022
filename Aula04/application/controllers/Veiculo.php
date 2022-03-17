<?php

    class Veiculo extends CI_Controller {

        public function index() {
            $this->load->model("VeiculoModel");

            $veiculos = $this->VeiculoModel->selecionarTodos();

            $talon = array(
                "lista_veiculos" => $veiculos,
                "titulo" => "Você está em Marquinhos veiculos",
                "sucesso" => "Veiculo add com sucesso",
                "erro" => "sdadasda"
            );

            $this->load->view("veiculo/index", $talon );
        }

        public function metodos() {
            echo "dadasdasdasdasdada";
        }

        public function novo() {
            echo "novo";
        }

        public function formNovo() {
            echo "formNovo";
        }

    }
?>