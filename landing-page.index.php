<?php

$badword = $_GET['badword'];
$paragraph = $_GET['paragraph'];

$paraLength = strlen($paragraph);

$newParagraph = str_replace($badword, '***', $paragraph);
$newParaLength = strlen($newParagraph);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.css" integrity="sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==" crossorigin="anonymous"/>

  <title>Landing Page PHP Badwords</title>
</head>
<body>
  <div class="container my-3">
    <div class="row">
      <div class="col-12">
        <h2>Landing Page PHP Badwords</h2>
      </div>

      <div class="col-6">

        <!-- PARAGRAFO ORIGINALE -->
        <div class="card p-3 w-100" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Paragrafo Originale:</h5>
            <p class="card-text pb-5 border-bottom"><?php echo $paragraph; ?></p>
            <p>Il paragrafo è lungo: <?php echo $paraLength; ?> caratteri</p>
          </div>
        </div>
        <!-- /PARAGRAFO ORIGINALE -->
       
      </div>

      

      <div class="col-6">

        <!-- PARAGRAFO REVISIONATO -->
        <div class="card p-3 w-100" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Paragrafo Revisionato:</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Parola da censurare: <?php echo $badword; ?></h6>
            <p class="card-text pb-4 border-bottom"><?php echo $newParagraph; ?></p>
            <p>Il paragrafo ora è lungo: <?php echo $newParaLength; ?> caratteri</p>
          </div>
        </div>
        <!-- /PARAGRAFO REVISIONATO -->
        
      </div>

      <div class="col-4 offset-4 text-center">
        <div class="btn btn-primary my-5"><a href="index.html" style="color: white; text-decoration: none">Torna indietro</a></div>
      </div>

    </div>
  </div>
</body>
</html>