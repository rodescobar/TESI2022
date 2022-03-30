<?php

    class VeiculoModel extends CI_Model {

        public function selecionarTodos() {
            //SELECT * FROM veiculo

            $retorno = $this->db->query("SELECT * FROM veiculo");
            return $retorno->result();
        }

        public function buscarId( $id ) {
            $retorno = $this->db->query( "SELECT * FROM veiculo WHERE id=" . $id );
            return $retorno->result();
        }

        public function inserir( $data ) {
            //var_dump($data);
            $this->db->insert("veiculo", $data);
        }
    }
?>