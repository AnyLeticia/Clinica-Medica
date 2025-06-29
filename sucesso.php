<?php require_once 'includes/header.php'; ?>
<style>
  body {
    background-color: #f2fdf9;
    font-family: 'Segoe UI', sans-serif;
    margin: 0;
    padding: 0;
  }

  .mensagem {
    text-align: center;
    color: #009879;
    padding: 100px 20px;
    min-height: 70vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .mensagem h1 {
    font-size: 36px;
    margin-bottom: 20px;
    color: #009879;
  }

  .mensagem p {
    font-size: 18px;
    margin-bottom: 30px;
    color: #444;
  }

  .botoes a {
    display: inline-block;
    margin: 10px;
    padding: 12px 25px;
    border-radius: 6px;
    font-weight: bold;
    text-decoration: none;
    color: white;
    background-color: #009879;
    transition: 0.3s ease;
  }

  .botoes a:hover {
    background-color: #007f68;
  }

  .botoes a.sair {
    background-color: #e74c3c;
  }

  .botoes a.sair:hover {
    background-color: #c0392b;
  }
</style>

<div class="mensagem">
  <h1>✅ Agendamento realizado com sucesso!</h1>
  <p>Obrigado por agendar sua consulta. Em breve entraremos em contato para confirmar os detalhes.</p>

  <div class="botoes">
    <a href="agendamento.php">Novo Agendamento</a>
    <a href="logout.php" class="sair">Sair</a>
  </div>
</div>

<?php require_once 'includes/footer.php'; ?>