document.addEventListener("DOMContentLoaded", () => {
  const formLogin = document.getElementById("form-login");
  if (formLogin) {
    formLogin.addEventListener("submit", function (e) {
      e.preventDefault();

      const usuario = document.getElementById("usuario").value;
      const senha = document.getElementById("senha").value;
      const erro = document.getElementById("erro-login");

      if (usuario === "admin" && senha === "123") {
        window.location.href = "agendamento.html";
      } else {
        erro.classList.remove("oculto");
      }
    });
  }

  const formAgendamento = document.getElementById("form-agendamento");
  if (formAgendamento) {
    formAgendamento.addEventListener("submit", function (e) {
      e.preventDefault();
      document.getElementById("mensagem-sucesso").classList.remove("oculto");
      this.reset();
    });
  }
});
