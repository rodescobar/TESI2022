<?php
    class CorModel extends CI_Model {
        public function selecionarTodos() {
            $dados = $this->db->query("SELECT * FROM cor ORDER BY cor")->result();

            return $dados;
        }

        public function inserir($dados) {
            /*
             array( 'cor' => 'Preto musgo' )
            */
            try {
                $this->db->insert('cor', $dados);
                return true;
            }
            catch (Exception $ex) {
                return false;
            }
        }
    }
?>