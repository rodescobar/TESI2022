<?php

    class VeiculoModel extends CI_Model {

        public function selecionarTodos() {
            $retorno = $this->db->query("
                                    SELECT
                                        V.*,
                                        C.cor AS cor_nome
                                    FROM veiculo AS V
                                    INNER JOIN cor AS C
                                        ON C.id = V.cor            
                                    ");
                                    
            return $retorno->result();
        }

        public function buscarId( $id ) {
            $retorno = $this->db->query( "SELECT * FROM veiculo WHERE id=" . $id );
            return $retorno->result();
        }

        public function buscarModelo( $modelo ) {
            $sql = "SELECT COUNT(1) as total FROM veiculo WHERE modelo='" . $modelo . "'";

            $retorno = $this->db->query( $sql )->result();

            return $retorno;
        }

        //Salvar alterações no veiculo
        public function salvaraltercao( $id, $marca, $modelo, $ano, $valor, $imagem, $cor ) {
            $sql = "UPDATE veiculo 
                    SET
                        marca = '" . $marca . "',
                        modelo = '" . $modelo. "',
                        ano = " . $ano . ",
                        valor = " . $valor . ",
                        cor = '" . $cor . "',
                        imagem = '" . $imagem. "'
                    WHERE id= " . $id . "
                ";
            $this->db->query( $sql );

            return true;
        }

        public function salvarnovo($marca, $modelo, $ano, $valor, $imagem, $cor) {
            $sql = "INSERT INTO veiculo 
                    (marca, modelo, ano, valor, cor, imagem)
                    VALUES
                    ('" .$marca. "', '" . $modelo ."', " . $ano . ", " . $valor . ", '" . $cor . "', '" . $imagem . "')
                ";

            $this->db->query( $sql );

            return true;
        }

        public function excluir($id) {
            $sql="DELETE FROM veiculo WHERE id=" . $id;
            $this->db->query( $sql );
            return true;
        }
    }
?>