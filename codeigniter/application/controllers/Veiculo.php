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

    /*
        <?php echo validation_errors(); ?>

        <?php echo form_open('form'); ?>
        
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'required',
                array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE)


        ou 

        $config = array(
        array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
        ),
        $this->form_validation->set_rules($config);
    */

?>