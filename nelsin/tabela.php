<?php
  include 'pdo.php';
  $sql = "select * from user";
  $sql = $pdo->query($sql);
  if ($sql->rowCount()>0) {
    foreach ($sql as $key) {
      echo "Id: ".$key['id']."<br><hr>";
      echo "Email: ".$key['email']." | | Email decifrado: ".base64_decode($key['email'])."<br><hr>";
      echo "CPF: ".$key['cpf']." | | CPF decifrado: ".base64_decode($key['cpf'])."<br><hr>";
    }
  }
  $sql = "select * from ende";
  $sql = $pdo->query($sql);
  if ($sql->rowCount()>0) {
    foreach ($sql as $key) {
      echo "Bairro: ".$key['bairro']." | | Bairro decifrado: ".base64_decode($key['bairro'])."<br><hr>";
      echo "Cidade: ".$key['cidade']." | | Cidade decifrado: ".base64_decode($key['cidade'])."<br><hr>";
    }
  }

 ?>
<a href="/nelsin/index.php">Voltar</a>
