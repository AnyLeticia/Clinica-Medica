<?php
session_start();
require_once 'includes/conexao.php';

$msgErro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $senhaHash = hash("sha256", $senha);

    $sql = "SELECT * FROM usuarios WHERE usuario = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $senhaHash);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $_SESSION["usuario"] = $usuario;
        header("Location: agendamento.php");
        exit;
    } else {
        $msgErro = "Usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Clínica Vida Saudável - Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="landing">
    <div class="conteudo">
      <h1>Clínica Médica</h1>
      <p>Cuidando de você com carinho e responsabilidade. Faça login para agendar sua consulta.</p>

      <form method="POST" class="form-login">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>

        <button type="submit">Entrar</button>

        <?php if ($msgErro): ?>
          <p class="erro"><?= $msgErro ?></p>
        <?php endif; ?>

        <p class="info-aviso">
          <strong>Usuário:</strong> admin &nbsp;&nbsp;|&nbsp;&nbsp; <strong>Senha:</strong> 123
        </p>
      </form>
    </div>
  </section>
</body>
</html>

<?php require_once 'includes/footer.php'; ?>