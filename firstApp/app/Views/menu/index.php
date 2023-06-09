<?= $this->extend('layouts/main') ?>
<?= $this->section('titulo') ?>
Menu
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<div>
  <p>Esta vista extiende del layout main.php y este es el contenido que puede ser dinamico del cuerpo, pero siempre habra un menu abajo (estatico)</p>
</div>
<?= $this->endSection() ?>