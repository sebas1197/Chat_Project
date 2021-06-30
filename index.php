<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Chat en tiempo real</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nombre</label>
            <input type="text" name="fname" placeholder="Ingresa tu nombre" required>
          </div>
          <div class="field input">
            <label>Apellido</label>
            <input type="text" name="lname" placeholder="Ingresa tu apellido" required>
          </div>
        </div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Ingresa tu email" required>
        </div>
        <div class="field input">
          <label>Clave</label>
          <input type="password" name="password" placeholder="Digita tu clave" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Selecciona una imagen</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continuar al chat">
        </div>
      </form>
      <div class="link">Ya tengo cuenta <a href="login.php">Iniciar Sesión</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
