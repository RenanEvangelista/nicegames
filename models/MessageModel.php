<?php

  /**
  * MessageModel.php
  * @author Jefferson Daniel <jeffersondanielss@gmail.com>
  */

  /**
  * Classe Message
  */

  class Message extends CRUD {

    /**
    * Inseri um registro na tabela de mensagens.
    * 
    * @return void
    */

    public function insert() {
      $pdo = parent::connect();

      $nome =      $_POST['nome'];
      $email =     $_POST['email'];
      $mensagem =  $_POST['mensagem'];

      $sql = $pdo->prepare("INSERT INTO mensagem(nome, email, mensagem)VALUES(:nome, :email, :mensagem)");

      $sql->bindValue(':nome',      $nome);
      $sql->bindValue(':email',     $email);
      $sql->bindValue(':mensagem',     $mensagem);
      $sql->execute();

      $message = 'Mensagem enviada com sucesso!';
      header("Location: ../../contact.php?message={$message}");
    }

  }

?>