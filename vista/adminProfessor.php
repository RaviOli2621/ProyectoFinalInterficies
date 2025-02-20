<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/estils.css">
  <script defer src="../js/dropdown.js"></script>
  <script defer src="../js/modals.js"></script>
</head>
<body onload='crearModal("sitioModal","Editar tots els professors","Segur que vols afegir tots els professor? Les noves dades sobreescriuran les anteriors.","uploadFile",[{id:"cancelarAdFile",texto:"Cancelar",redireccion:"adminProfessor.php"},{id:"aceptarAdFile",texto:"Aceptar",redireccion:"adminProfessor.php"}]);
crearModal("sitioModal2","Eliminar professor","Segur que vols eliminar aquest professor?","delProf",[{id:"cancelarDelUser",texto:"Cancelar",redireccion:"adminProfessor.php"},{id:"aceptarDelUser",texto:"Aceptar",redireccion:"adminProfessor.php"}]);'>
    <div id="sitioModal"></div>
    <div id="sitioModal2"></div>
  <?php include dirname (__FILE__)."/Elements/header.html"; ?>
  <div class="container">
    <div class="titulo">
      <h1>Professors</h1>
    </div>
    <div class="innline">
      <?php include dirname (__FILE__)."/Elements/searchBar.html"; ?>
      <div class="buttonMenu">
          <button id="uploadFile"><img class="img" src="../src/uploadFile.svg" /></button>
      </div>
    </div>
    <div class="innline">
      <?php include dirname (__FILE__)."/Elements/plusButton.html"; ?>
    </div>  
  
    <div class="semitransparentCont">
      
      <div class="infoContainer">
        <div class="innline">
          <div class="purple">Professor1</div>
          <div class="adminProfessorContainer" id="grup1">
              <input type="text" name="GrupName" value="666666666" readonly>
              <input type="text" name="GrupName" value="99999999J" readonly>
              <button class="delProf"><img src="../src/cross.svg" alt="folder"></button>
          </div>
        </div>
      </div>
      <div class="infoContainer">
        <div class="innline">
          <div class="purple">Professor1</div>
          <div class="adminProfessorContainer" id="grup1">
              <input type="text" name="GrupName" value="666666666" readonly>
              <input type="text" name="GrupName" value="99999999J" readonly>
              <button class="delProf"><img src="../src/cross.svg" alt="folder"></button>
          </div>
        </div>
      </div>
      <div class="infoContainer">
        <div class="innline">
          <div class="purple">Professor1</div>
          <div class="adminProfessorContainer" id="grup1">
              <input type="text" name="GrupName" value="666666666" readonly>
              <input type="text" name="GrupName" value="99999999J" readonly>
              <button class="delProf"><img src="../src/cross.svg" alt="folder"></button>
          </div>
        </div>
      </div>
      <div class="infoContainer">
        <div class="innline">
          <div class="purple">Professor1</div>
          <div class="adminProfessorContainer" id="grup1">
              <input type="text" name="GrupName" value="666666666" readonly>
              <input type="text" name="GrupName" value="99999999J" readonly>
              <button class="delProf"><img src="../src/cross.svg" alt="folder"></button>
          </div>
        </div>
      </div>

    </div>

  </div>
</body>
</html>