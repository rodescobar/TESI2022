<?php

    class VeiculoModel extends CI_Model {

        public function selecionarTodos() {
            //SELECT * FROM veiculo

            $retorno = $this->db->query("SELECT * FROM veiculo");
            return $retorno->result();
        }

        public function selecionarWhere( $clausula ) {
            //SELECT * FROM veiculo WHERE modelo LIKE '%Fusca%'
        }

        public function inserir( $data ) {
            //var_dump($data);
            $this->db->insert("veiculo", $data);
        }
    }
?>