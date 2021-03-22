<?php
  include 'pdo.php';
  if (isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['cpf'])) {
    $email = base64_encode($_POST['email']);
    $pass = base64_encode($_POST['pass']);
    $cpf = base64_encode($_POST['cpf']);
    $sql = "INSERT INTO user set senha='$pass', email ='$email', cpf='$cpf'";
    $sql = $pdo->query($sql);
    if ($sql->rowCount()>0) {
      if (isset($_POST['bairro']) && isset($_POST['cidade'])) {
        $bairro = base64_encode($_POST['bairro']);
        $cidade = base64_encode($_POST['cidade']);
        $sql = "INSERT INTO ende set bairro='$bairro', cidade ='$cidade'";
        $sql = $pdo->query($sql);
        if ($sql->rowCount()>0) {
          header("Location: tabela.php");
        }
      }
    }
  }
?>
<form action="index.php" method="post">
  <label for="email">Email</label>
  <input type="email" name="email">
  <label for="pass">Senha</label>
  <input type="password" name="pass">
  <label for="cpf">CPF</label>
  <input type="text" name="cpf">
  <label for="bairro">Bairro</label>
  <input type="text" name="bairro">
  <label for="cidade">Cidade</label>
  <input type="text" name="cidade">
  <button type="submit" name="button">Enviar </button>
</form>
<a href="/nelsin/tabela.php">Ver a tabela</a>
