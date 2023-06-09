<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->renderSection('titulo') ?></title>
</head>

<body>
  <section>
    <h3>Aqui va un texto</h3>
    <?= $this->renderSection('contenido') ?>
    <h3>Aqui va un componente</h3>
    <?= $this->include('componentes/menu') ?>
  </section>
</body>

</html>