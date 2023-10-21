<?php

namespace App\Models;

use MF\Model\Model;

class Produto extends Model {

	private $id;
    private $nome;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $value){
        $this->$atributo = $value;
    }


	public function getProdutos() {
		
		$query = "select id, descricao, preco from tb_produtos";
		return $this->db->query($query)->fetchAll();
	}
}

?>