<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/estils.css">
  <script defer src="../js/dropdown.js"></script>
  <script defer src="../js/modals.js"></script>
</script>
</head>
<body onload='crearModal("sitioModal","Admin o professor","Com aquesta aplicacció no te backend aquest modal sustituira el login.\nCom et vols logar, com admin o professor","logInButton",[{id:"logAdmin",texto:"Admin",redireccion:"adminGrups.php"},{id:"logProf",texto:"Professor",redireccion:"professorsLlista.php"}]);'>
<div id="sitioModal"></div>

  <?php include dirname (__FILE__)."/Elements/header.html"; ?>
  <div class="container">
    <div class="titulo">
      <h1>Benvolgut al administrador de projectes del Sa Palomera</h1>
    </div>
    <div class="imagenSapa">
      <img class="imagenSapa" src="../src/sapalomera.png" alt="sapalomeraImagen">
    </div>


  </div>
</body>
</html>