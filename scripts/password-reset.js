const formReset = document.forms.passwordReset;
formReset.addEventListener("submit", (e) => {
  e.preventDefault();

  // pega parâmetros url
  const urlParams = new URLSearchParams(window.location.search);
  const token = urlParams.get("token");

  const { email, password, password_confirmation } = formReset;

  const data = {
    token: token,
    email: email.value,
    password: password.value,
    password_confirmation: password_confirmation.value,
  };

  fetch("https://fitmetrics.com.br/laravel/public/api/password/reset", {
    method: "POST",
    body: JSON.stringify(data),
    headers: {
      "Content-Type": "application/json",
      Accept: "application/json",
    },
  })
    .then((response) => response.json())
    .then((data) => {
      const div = document.querySelector(".api_response");
      const messageText = document.createElement("p");

      messageText.textContent = data.message;
      div.appendChild(messageText);
    })
    .catch((error) => console.error(error));
});
