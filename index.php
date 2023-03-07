<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="icon" href="img/icone.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/1b0084a9ac.js" crossorigin="anonymous"></script>
  
  <!--font awsome, icons -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="scroll.css">

  <style>
    html {
      scroll-behavior: smooth;
    }

    .whatsapp-link {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 20px;
      right: 20px;
      background-color: #25d366;
      color: #fff;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 1px 1px 2px #888;
      z-index: 1000;
    }

    .fa-whatsapp {
      margin-top: 16px;
    }
  </style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <title>DR.FSOARES</title>
  <!--#14a4bc esta é a cor info-->
</head>

<body>

  <div>
    <!--botao zap OU MUDAR O LINK PARA WHATS COMERCIAL-->
    <a class="whatsapp-link" href="https://api.whatsapp.com/send/?phone=5511996047775&text&type=phone_number&app_absent=0" target="_blank"><i class="fa fa-whatsapp"></i></a>
  </div>

  <div>
    <nav>
      <?php include "navbar.php";  ?>
    </nav>
  </div>


  <!--<div class="p-5 text-white text-center" style="max-width: 1920px;">

    <img width="600" height="400" src="img/338-removebg recort.png" alt="BannerLogo" class="img-fluid d-none d-md-block">
    <img width="600" height="400" src="img/338-removebg recort.png" alt="" class="img-fluid d-block d-md-none">
  </div>-->


  <header>
    <?php include "header.php"; ?>
  </header>

  <div>
    <main>
      <section id="aboutus.php"></section>
      <?php include "aboutus.php" ?> <!--fazer um carrosel mais smooth-->
      <section id="services.php"></section>
      <?php include "services.php" ?>
      <?php include "time.php" ?>
      <section id="agendar.php"></section>
      <?php include "agendar.php" ?>
      <section id=contato.php></section>
      <?php include "contato.php" ?>

    </main>
  </div>

  <div>
    <footer>
      <?php include "footer.php"; ?>
    </footer>
  </div>

</body>

</html>