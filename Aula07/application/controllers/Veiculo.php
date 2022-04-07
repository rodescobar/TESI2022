<?php

    class Veiculo extends CI_Controller {

        public function __construct() {
            parent::__construct();

            var_dump($_SERVER);
            /*
            if (    !isset($_SESSION["tesi2022"]) ) {
                echo "você precisa estar logado";
                header("location: /index.php/login");
            }
            */
        }

        public function index() {
            $this->load->model("VeiculoModel");

            $veiculos = $this->VeiculoModel->selecionarTodos();
            $tabela = "";

            //echo "Bem vindo " . @$_SESSION["tesi2022"]["email"];

            foreach($veiculos as $item ) {
                //GET
                $tabela = $tabela . "<tr>";

                if ( isset($_SESSION["tesi2022"])) {
                    $tabela = $tabela . "
                        <td style='cursor: pointer'>
                            <a href='/index.php/veiculo/alterar?codigo=" . $item->id . "'>
                                ✏️
                            </a>
                            <a href='/index.php/veiculo/excluir?codigo=" . $item->id . "'>
                                ❌    
                            </a>
                        </td>";
                }

                $tabela = $tabela . "
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
            $this->load->model("VeiculoModel");

            $id = $_GET["codigo"];

            $retorno = $this->VeiculoModel->buscarId( $id );
            
            $data = array(
                "titulo"=>"Alteração de veículos",
                "veiculo"=>$retorno[0]
            );

            $this->load->view("veiculo/formAlterar", $data);


        }

        //Salva os dados atualizados 
        public function salvaralteracao() {
            $this->load->model("VeiculoModel");

            $id = $_POST["id"];
            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $ano = $_POST["ano"];
            $valor = $_POST["valor"];
            $imagem = $_POST["imagem"];
            $cor = $_POST["cor"];

            $retorno = $this->VeiculoModel->salvaraltercao(
                $id, $marca, $modelo, $ano, $valor, $imagem, $cor
            );

            if ($retorno == true) {
                header('location: /index.php/veiculo');
            }
            else {
                echo "houve erro na alteração";
            }
        }
        
        //Criar veiculo
        public function formNovo() {
            $this->load->view("/veiculo/formnovo");
        }

        //Salvar novo veiculo
        public function salvarnovo() {
            $this->load->model("VeiculoModel");

            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $ano = $_POST["ano"];
            $valor = $_POST["valor"];
            $imagem = $_POST["imagem"];
            $cor = $_POST["cor"];

            $retorno = $this->VeiculoModel->buscarModelo( $modelo );

            //var_dump( $retorno );

            if ( $retorno[0]->total > 0 ) {
                echo "Não pode incluir, já existe um total de " . $retorno[0]->total;
            } else {
                $retorno = $this->VeiculoModel->salvarnovo(
                    $marca, $modelo, $ano, $valor, $imagem, $cor
                ); 
                
                header("location: /index.php/veiculo");
            }
        }

        //Excluir 
        public function excluir() {
            $this->load->model("VeiculoModel");

            $id = $_GET["codigo"];

            $this->VeiculoModel->excluir($id);

            header("location: /index.php/veiculo");
        }

    }
?>