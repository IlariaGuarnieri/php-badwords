<?php
$paragrafo =$_POST['paragrafo'];
$badword =$_POST['badword'];
$lunghezza_paragrafo= strlen($paragrafo);
$paragrafo_ok =str_replace($badword ,'***', $paragrafo);
$lunghezza_paragrafo_censurato = strlen($paragrafo_ok )
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords con censura</title>
</head>
<body>
  <div class="container">
    <h2>paragrafo inviato:</h2>
    <p><?php echo $paragrafo ?></p>
    <p>lunghezza caratteri paragrafo: <?php echo $lunghezza_paragrafo ?></p>
    <p>parola da cancellare: <?php echo $badword ?></p>
    <h2>paragrafo censurato:</h2>
    <p><?php echo $paragrafo_ok ?></p>
    <p>lunghezza caratteri paragrafo corretto: <?php echo $lunghezza_paragrafo_censurato ?></p>
  </div>
</body>
</html>