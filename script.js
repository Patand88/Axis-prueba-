document.querySelector("form").addEventListener("submit", function(e) {
  e.preventDefault();
  const form = e.target;
  fetch(form.action, {
    method: form.method,
    body: new FormData(form)
  })
  .then(res => res.text())
  .then(msg => {
    document.getElementById("form-response").textContent = msg;
    form.reset();
  })
  .catch(() => {
    document.getElementById("form-response").textContent = "Error al enviar.";
  });
});
