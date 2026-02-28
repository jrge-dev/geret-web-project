<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link href="signin.css" rel="stylesheet">
  <title>
    <?php
    if (!$titleName) {
      echo "Sitio Web";
    }
    echo $titleName


    ?>
  </title>
</head>

<body>
  <div class="bg-primary-subtle rounded-5 container mb-5">
    <header class="d-flex justify-content-between py-2">

      <ul class="nav bg-light">
        <li>

          <a href="../index.php" class="nav-link active" aria-current="page">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#0044ffff" class="bi bi-house-door" viewBox="0 0 16 16">
              <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
            </svg>
          </a>
        </li>
      </ul>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="./antenas.php" class="nav-link">Antenas</a></li>
        <li class="nav-item"><a href="./login.php" class="nav-link">Login</a></li>
      </ul>
    </header>
  </div>
</body>




</html>
