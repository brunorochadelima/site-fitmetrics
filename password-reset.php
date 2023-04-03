<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resetar senha</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/styles/css/password-reset.css">
    <link rel="stylesheet" href="./assets/styles/css/tema.css" />
    <link rel="stylesheet" href="./assets/styles/css/header.css" />
    <link rel="stylesheet" href="./assets/styles/css/footer.css" />
</head>

<body>
    <?php
    require "./header.php"
    ?>
    <section class="container_reset">
        <form name="passwordReset" method="post" class="form_reset">
            <h1 class="h2">Alterar senha</h1>

            <div class="form_reset__wrapper_input">
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
            </div>

            <div class="form_reset__wrapper_input">
                <label for="password">Senha</label>
                <input type="text" id="password" name="password" />
            </div>

            <div class="form_reset__wrapper_input">
                <label for="password">Confirmar Senha</label>
                <input type="text" id="password_confirmation" name="password_confirmation" />
            </div>

            <button type="submit" class="button_primary">Salvar</button>

            <div class="api_response">
            </div>
        </form>
    </section>

    <script src="./scripts/password-reset.js"></script>
    <?php
    require "./footer.php"
    ?>
</body>

</html>