<?php

require_once __DIR__ . '/partials/functions.php';

session_start();

if(isset($_POST['numero'])) {
  if($_POST['numero'] >= 8 && $_POST['numero'] <= 32) {
    $password = generateRandomPassword($_POST['numero']);
    $_SESSION['password'] = $password;
    header("Location: success-page.php");

  }else {
    $message = "Errore! La lunghezza della password deve essere compresa tra 8 e 32 caratteri.";
  }
} else {
  $message = "Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- link BOOTSTRAP  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- link CSS  -->
  <link rel="stylesheet" href="css/style.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Password Generator</title>
</head>

<body>

  
  <div class="container text-center">
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>
    
    <div class="message-box">

      <p><?php echo $message ?></p>

    </div>
   

    <div class="form-container">
      <form action="index.php" method="POST">
        <div class="input-box mb-3 bg-light.bg-gradient">
          <label for="numero" class="form-label text-dark-gray w-50 fs-3 fw-bold text-start">Lunghezza password:</label>
          <input type="number" class="form-control w-25 h-75 bg-white border border-secondary" name="numero" id="numero">

          <div class="w-100 text-start mt-3">
            <button class="btn btn-primary me-2 fs-3 ">Invia</button> 
            <button class="btn btn-secondary  fs-3">Annulla</button>
          </div>
          
        </div>

      </form>
    </div>
  </div>

 
  
</body>
</html>
