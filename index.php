<?php require_once './service.php'; ?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>Covid19 - info Brasil</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://kit.fontawesome.com/a221d2f406.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Jost|Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
</head>


<body>

  <div class="container">
    <div class="box mt-5">
      <h1 class="pl-3 text-center">Covid-19 info Brasil</h1>
      <div class="row">
        <div class="col-md-12">
          <!-- <p class="pl-4 h3"><strong>Brasil</strong></p><br> -->
          <div class="data  pl-4">
            <?php foreach ($data as $info) : ?>

              <p class="text-center mt-3">
                <i class="fas fa-sad-tear icon"></i> Casos: <?= $info->cases; ?>
                <span class="px-2">
                  <i class="fas fa-heart-broken icon"></i> Mortes: <?= $info->deaths; ?>
                </span>
                <i class="fas fa-heart icon"></i> Recuperados: <?= $info->recovered; ?>
              </p>

            <?php endforeach; ?>

          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="pt-4">
            <p class="text-center">Dados por estados</p>
            <canvas id="myChart" style="height:90vh; width:90vw">

            </canvas>
          </div>
        </div>
        <span class="pl-4 pb-2 text-secondary">última atualização: <?= to_date($info->updated_at);?></span>
      </div>

    </div>
    <!--end Box-->


  </div>
  <!--end Container-->

  <!-- <span class="text-secondary text-center">&copy; 2020 - by Kelly</span> -->



  <script type="text/javascript" src="js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script type="text/javascript" src="js/chart.js"></script>

</body>

</html>