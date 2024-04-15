
<!-- // $paragrafo= 'Ilaria';
// $cognome= 'Guarnieri'; -->
<!-- // $parolacensurata = '';

// $nome_completo= "$nome $cognome"; -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>

  <title>PHP Badwords</title>
</head>

<body>
<div class="container">
  <form action="censura.php" method="POST">
  <input type="text" name="badword" placeholder="parola da censurare">
  <textarea name="paragrafo" id="" cols="30" rows="10"></textarea>
  <button class="btn btn-primary ">invia</button>
  </form>

<!-- <a href="ricevo-get.php">vai a ricevo get</a> -->
<!-- <h5> Ciao sono Vai a ricevo Get</h5> -->
</div>
</body>

</html>