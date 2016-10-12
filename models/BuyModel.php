<?php

  /**
  * BuyModel.php
  * @author Jefferson Daniel <jeffersondanielss@gmail.com>
  */

  /**
  * Classe Buy
  *
  * Subclasse de Client, contém médodos das compras.
  */

  class Buy extends Client {

    /**
    * Busca o id do usuário logado.
    *
    * @return int $userId Id do usuário.
    */

    public function getUserId() {
      if( !isset($_SESSION) ) {
        session_start();
      }
      $user = parent::getLoggedUser();
      $userId = $user[0]['id'];
      return $userId;
    }

    /**
    * Adiciona produtos ao carrinho.
    *
    * @param int $productId Id do produto
    * @return void
    */

    public function addCart( $productId ) {
      $db = new Database;
      $userId = $this->getUserId();

      $pdo = $db->connect();
      $sql = $pdo->prepare("INSERT INTO buy(id_cliente, id_produto)VALUES(:id_cliente, :id_produto)");
      $sql->bindValue(':id_cliente',  $userId);
      $sql->bindValue(':id_produto', $productId);
      $sql->execute();
    }

    /**
    * Retorna um array com todos produtos que o cliente logado comprou.
    *
    * @return Array
    */

    public function getBuyProducts() {
      $db = new Database;
      $userId = $this->getUserId();
      $prod = [];

      $pdo = $db->connect();
      $sql = $pdo->prepare("SELECT * FROM buy WHERE id_cliente = :id_cliente");
      $sql->bindValue(':id_cliente', $userId);
      $sql->execute();
      $produtosComprados = $sql->fetchAll(PDO::FETCH_ASSOC);

      foreach ($produtosComprados as $value) {
        $produto = $pdo->prepare("SELECT * FROM produto WHERE id = :id");
        $produto->bindValue(':id', $value['id_produto']);
        $produto->execute();
        $dadosProduto = $produto->fetchAll(PDO::FETCH_ASSOC);
        array_push($prod, $dadosProduto);
      }

      return $prod;
    }

    /**
    * Retona a quantidade de compras.
    *
    * @return int
    */

    public function buyTotaltens() {
      $dadosProduto = $this->getBuyProducts();
      return count($dadosProduto);
    }


    /**
    * Exibe valor total das compras.
    *
    * @return void
    */

    public function buyTotal() {
      $total = 0;
      $dadosProduto = $this->getBuyProducts();

      foreach ($dadosProduto as $value) {
        foreach ($value as $val) {
          $total += $val['preco'];
        }
      }

      echo 'R$ ' . $total . ',00';
    }

    /**
    * Método que conclui uma compra.
    *
    * Recebe o Id do cliente e apaga os registros de compras na tabela Buy.
    *
    * @param int $userId com o ID do usuário.
    *
    * @return void
    */

    public function purchase( $userId ) {
      $db = new Database;
      $pdo = $db->connect();
      $sql = $pdo->prepare("DELETE FROM buy WHERE id_cliente = :id_cliente");
      $sql->bindValue(':id_cliente', $userId);
      $sql->execute();
    }

  }

?>