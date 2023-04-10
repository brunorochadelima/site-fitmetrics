<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Transforme o seu corpo e alcance seus objetivos de fitness com o aplicativo FitMetrics. Receba dicas personalizadas e rastreie seus progressos com tecnologia avançada." data-rh="true" />
  <link rel="canonical" href="https://www.fitmetrics.com.br" />
  <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon" />

  <title>
    FitMetrics - Alcançe o corpo dos seus sonhos com ajuda da tecnologia
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/styles/css/index.css" />
  <link rel="stylesheet" href="./assets/styles/css/tema.css" />
  <link rel="stylesheet" href="./assets/styles/css/header.css" />
  <link rel="stylesheet" href="./assets/styles/css/footer.css" />
</head>

<body>
  <?php
  require "./header.php"
  ?>
  <section class="container_home">
    <div class="hero_section">
      <h1 class="h1">
        Alcance o corpo dos seus sonhos com o acompanhamento personalizado do
        FitMetrics
      </h1>

      <!-- <a href="/admin/dashboard" role="button" class="button_primary">
        COMEÇAR AGORA
      </a> -->
      <a href="https://play.google.com/store/apps/details?id=com.bruno_rocha_de_lima.fitapp" role="button">
        <img src="./assets/img/google-play.svg" width="250" height="74">
      </a>

      <img class="hero_section__img" src="./assets/img/casal-fitness.png" alt="" width="871" height="755" />
    </div>

    <div class="hero_section__wrapper">
      <img class="hero_section__wrapper_item" src="./assets/img/mockup-smartphone.png" alt="" width="548" height="619" />
      <div class="hero_section__wrapper_item">
        <h2 class="hero_section__wrapper_item__title">
          <!-- <FcApproval size={30} style={{ verticalAlign: "middle" }} />{" "} -->
          Transforme sua jornada de saúde com o nosso web app inovador!
        </h2>
        <p class="hero_section__wrapper_item__description">
          Com o nosso web app, você terá acesso a um completo acompanhamento
          de seu peso, gordura corporal, Índice de Massa Corporal (IMC), Taxa
          Metabólica Basal e medidas corporais.
        </p>
      </div>

      <div class="hero_section__wrapper_item">
        <h2 class="hero_section__wrapper_item__title">
          <!-- <FcApproval size={30} style={{ verticalAlign: "middle" }} />  -->
          Tenha seu histórico de saúde e medidas corporais ao alcance de um
          clique!
        </h2>
        <p class="hero_section__wrapper_item__description">
          Não importa se você está em casa, na academia ou em viagem, seus
          dados estarão disponíveis para você a qualquer momento, você nunca
          mais terá que se preocupar com perda de dados. Acompanhe seu
          progresso, defina metas realistas e alcance o corpo dos seus sonhos
          de forma mais eficiente com a nossa tecnologia de armazenamento na
          nuvem.
        </p>
      </div>
    </div>
  </section>
  <section class="bar_intro">
    <div class="container_home bar_intro__wrapper">
      <img class="bar_intro__wrapper__img" src="./assets/img/grafico-fitmetrics.jpg" alt="" width="694" height="393" />
      <div class="bar_intro__wrapper__item_text">
        <!-- <GraphicMultiLine style={{ maxWidth: "100%" }} /> -->
        <h2 class=".h2">Acompanhe seu progresso e alcance seus objetivos</h2>
        <p>
          Com nossa plataforma fácil de usar, você pode rastrear seus
          progresso, criar metas e acompanhar os resultados da sua dieta e
          treino.
        </p>
        <p>
          Alcance seus objetivos de forma eficiente e mantenha-se motivado com
          gráficos e relatórios detalhados.
        </p>
      </div>
    </div>
  </section>
  <section class="container_home">
    <h2 class="h2">
      <BsFillLightningChargeFill color="#A3E635" /> Veja como é fácil começar
    </h2>
    <ul class="steps_wrapper">
      <li>
        <span class="steps_wrapper__number">01</span>
        <p class="steps_wrapper__description">
          Acesse nosso site no seu dispositivo móvel ou computador.
        </p>
      </li>
      <li>
        <span class="steps_wrapper__number">02</span>
        <p class="steps_wrapper__description">
          Crie sua conta gratuita e preencha seus dados pessoais, incluindo
          informações sobre seu peso, altura, idade e objetivos de saúde.
        </p>
      </li>
      <li>
        <span class="steps_wrapper__number">03</span>
        <p class="steps_wrapper__description">
          Comece a registrar suas medidas corporais e pesos diariamente ou com
          a frequência desejada.
        </p>
      </li>
      <li>
        <span class="steps_wrapper__number">04</span>
        <p class="steps_wrapper__description">
          Visualize seus dados e progresso na seção "dashboard". Verifique
          se você está perto de alcançar suas metas e ajuste sua dieta e
          rotina de exercícios de acordo. Com o tempo, você terá um histórico
          completo de sua jornada de saúde e bem-estar ao seu alcance.
        </p>
      </li>
    </ul>
  </section>
  <?php
  require "./footer.php"
  ?>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "SoftwareApplication",
      "name": "FitMetrics",
      "description": "Acompanhe seu progresso de saúde de forma fácil e eficiente com o FitMetrics! Nosso aplicativo oferece um acompanhamento personalizado de seu peso, gordura corporal, IMC, medidas corporais e muito mais, para que você possa atingir seus objetivos",
      "operatingSystem": "Android",
      "applicationCategory": "Health",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "BRL"
      }
    }
  </script>
</body>

</html>