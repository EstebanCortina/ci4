<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Valor:
    <?php
    if (isset($titulo)) {
      echo $titulo;
    } else {
      echo "";
    }
    ?>

  </title>
</head>

<body>
  <p>
    <?php
    if (isset($body)) {
      echo $body;
    } else {
      echo "";
    }
    ?>
  </p>
</body>

</html>