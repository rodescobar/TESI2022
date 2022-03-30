<?php

    class Veiculo extends CI_Controller {

        public function index() {
            $this->load->model("VeiculoModel");

            $veiculos = $this->VeiculoModel->selecionarTodos();
            $tabela = "";

            foreach($veiculos as $item ) {
                /*
                    public function alterar() {
                        echo "Chegou na alteração de veículo";
                    }
                */
                $tabela = $tabela . "
                    <tr>
                        <td style='cursor: pointer'>
                            <a href='/index.php/veiculo/alterar'>
                                ✏️
                            </a>
                        </td>
                        <td>" . $item->marca ."</td>
                        <td>" . $item->modelo ."</td>
                        <td>" . $item->cor ."</td>
                        <td>" . $item->valor ."</td>
                        <td>
                            <img src='" . $item->imagem . "' style='width:150px' />
                        </td>
                    </tr>
                ";
            }

            $variavel = array(
                "lista_veiculos" => $veiculos,
                "tabela" => $tabela,
                "titulo" => "Você está em Marquinhos veiculos",
                "sucesso" => "Veiculo add com sucesso",
                "erro" => "sdadasda"
            );

            $this->load->view("veiculo/index", $variavel );
        }

        //Alteração de veículo
        public function alterar() {
            echo "Chegou na alteração de veículo";
        }

        public function formNovo() {
            echo "formNovo";
        }

    }
?>