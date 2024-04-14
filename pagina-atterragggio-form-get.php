<!-- questo è un paragrafo php -->
<?php

$paragrafo = $_GET['paragrafo'];
$parolacensurata = $_GET['parolacensurata'];
// la parola da censurare è ipsum
$paroladacambiare = str_replace("ipsum", "***", $paragrafo );
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>

  <title>Ricevo Form Get</title>
</head>
<body>
  <div class="container my-5">
    <h1>paragrafo: <?php echo $paragrafo ?> </h1>
    <h1>paragrafo con censura: <?php echo $paroladacambiare ?> </h1>
  
  </div>
</body>
</html>