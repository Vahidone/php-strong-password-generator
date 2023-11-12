
<?php
session_start();

if(isset($_SESSION['password'])) {
  $password = $_SESSION['password'];
} else {
  echo "Nessuna password generata. Si prega di tornare alla pagina principale.";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>

  <!-- link BOOTSTRAP  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- link CSS  -->
  <link rel="stylesheet" href="css/style-success.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Password Generator</title>
</head>

<body>
  <div class="w-100 hv-100 d-flex justify-content-center align-items-center">
    <div class="my-container text-center">
      <h2 class="text-white fs-1">La password generata è:</h2>
      <div class="result ">
        <p class="fs-3 fw-bold "><?php echo $password ?></p>
      </div>

      <button class="btn btn-info my-5"><a href="./index.php" >Torna alla homepage</a></button>
    </div>
  </div>

</body>
</html>