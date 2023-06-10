<div>
  <form method="POST" action="<?php echo base_url() ?>form">
    <label for="userName">Nombre:</label>
    <input type="text" name="userName">
    <button type="submit">Enviar</button>
  </form>
  <div>
    <p>
      <?php
      if (session()->has('data')) {
        $data = session('data');
        echo "Nuevo usuario con ID: " . $data['id'];
        session()->remove('data');
      }
      ?>
    </p>
  </div>
</div>