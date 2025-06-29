<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}

require_once 'includes/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Agendamento Médico</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Clínica Médica</h1>
    <p>Agende sua consulta abaixo:</p>
    <a href="logout.php" class="btn-sair">Sair</a>
  </header>

  <main>
    <form method="POST">
      <h2>Formulário de Agendamento</h2>

      <label for="nome">Nome completo:</label>
      <input type="text" name="nome" required>

      <label for="email">E-mail:</label>
      <input type="email" name="email" required>

      <label for="telefone">Telefone:</label>
      <input type="tel" name="telefone" required>

      <label for="especialidade">Especialidade:</label>
      <select name="especialidade" required>
        <option value="">Selecione</option>
        <option value="clínico geral">Clínico Geral</option>
        <option value="cardiologia">Cardiologia</option>
        <option value="dermatologia">Dermatologia</option>
        <option value="pediatria">Pediatria</option>
      </select>

      <label for="data">Data:</label>
      <input type="date" name="data" required>

      <label for="horario">Horário:</label>
      <input type="time" name="horario" required>

      <button type="submit">Agendar</button>
    </form>
  </main>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $especialidade = $_POST["especialidade"];
    $data = $_POST["data"];
    $horario = $_POST["horario"];

    $sql = "INSERT INTO agendamentos (nome, email, telefone, especialidade, data_consulta, horario)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nome, $email, $telefone, $especialidade, $data, $horario);

    if ($stmt->execute()) {
        header("Location: sucesso.php");
        exit;
    } else {
        echo "<p class='erro'>Erro ao agendar: " . $conn->error . "</p>";
    }
}
?>
</body>
</html>

<?php require_once 'includes/footer.php'; ?>