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
<body onload='crearModal("sitioModal","Afegir usuari","En proces...","addFile",[{id:"cancelarAdFile",texto:"Cancelar",redireccion:"adminGrups.php"},{id:"aceptarAdFile",texto:"Aceptar",redireccion:"adminGrups.php"}]);
crearModal("sitioModal2","Editar tots els alumnes","Segur que vols afegir tots els alumnes?\nLes noves dades sobreescriuran les anteriors.","deleteUsers",[{id:"cancelarDelUser",texto:"Cancelar",redireccion:"adminGrups.php"},{id:"aceptarDelUser",texto:"Aceptar",redireccion:"adminGrups.php"}]);'>
  <div id="sitioModal"></div>
  <div id="sitioModal2"></div>  
  <?php include dirname (__FILE__)."/Elements/header.html"; ?>
  <div class="container">
    <div class="titulo">
      <h1>Grups</h1>
    </div>
    <div class="innline">
      <?php include dirname (__FILE__)."/Elements/searchBar.html"; ?>
      <div class="buttonMenu">
          <button id="addFile"><img class="img" src="../src/file.svg" /></button>
      </div>
      <div class="buttonMenu">
          <button id="deleteUsers"><img class="img" src="../src/removeUsers.svg" /></button>
      </div>
    </div>
    <div class="innline">
      <?php include dirname (__FILE__)."/Elements/plusButton.html"; ?>
    </div>

    <div class="infoContainer">
      <div class="innline">
        <div class="adminGrupContainer" id="grup1">
          <div class="left">
            <input type="text" name="GrupName" value="Grup 1" readonly>
          </div>
          <div class="right">
            <button onclick="dropGrup('grup1')"><img src="../src/folder.svg" class="goAdminProject" alt="folder"></button>
            <button><img src="../src/student.svg" alt="folder"></button>
            <button onclick="dropGrup('grup1')"><img src="../src/DownArrow.svg" alt="folder"></button>
          </div>
        </div>
      </div>
    </div>

    <div class="infoContainer">
      <div class="innline">
        <div class="adminGrupContainer" id="grup2">
          <div class="left">
            <input type="text" name="GrupName" value="Grup 2" readonly>
          </div>
          <div class="right">
            <button onclick="dropGrup('grup1')"><img src="../src/folder.svg" class="goAdminProject" alt="folder"></button>
            <button><img src="../src/student.svg" alt="folder"></button>
            <button onclick="dropGrup('grup1')"><img src="../src/DownArrow.svg" alt="folder"></button>
          </div>
        </div>
      </div>
    </div>

    <div class="infoContainer">
      <div class="innline">
        <div class="adminGrupContainer" id="grup3">
          <div class="left">
            <input type="text" name="GrupName" value="Grup 3" readonly>
          </div>
          <div class="right">
            <button onclick="dropGrup('grup1')"><img src="../src/folder.svg" class="goAdminProject" alt="folder"></button>
            <button><img src="../src/student.svg" alt="folder"></button>
            <button onclick="dropGrup('grup1')"><img src="../src/DownArrow.svg" alt="folder"></button>
          </div>
        </div>
      </div>
    </div>

    <div class="infoContainer">
      <div class="innline">
        <div class="adminGrupContainer" id="grup4">
          <div class="left">
            <input type="text" name="GrupName" value="Grup 4" readonly>
          </div>
          <div class="right">
            <button onclick="dropGrup('grup1')"><img src="../src/folder.svg" class="goAdminProject" alt="folder"></button>
            <button><img src="../src/student.svg" alt="folder"></button>
            <button onclick="dropGrup('grup1')"><img src="../src/DownArrow.svg" alt="folder"></button>
          </div>
        </div>
      </div>
    </div>

    <div class="infoContainer">
      <div class="innline">
        <div class="adminGrupContainer" id="grup5">
          <div class="left">
            <input type="text" name="GrupName" value="Grup 5" readonly>
          </div>
          <div class="right">
            <button onclick="dropGrup('grup1')"><img src="../src/folder.svg" class="goAdminProject" alt="folder"></button>
            <button><img src="../src/student.svg" alt="folder"></button>
            <button onclick="dropGrup('grup1')"><img src="../src/DownArrow.svg" alt="folder"></button>
          </div>
        </div>
      </div>
    </div>

    <div class="infoContainer">
      <div class="innline">
        <div class="adminGrupContainer" id="grup6">
          <div class="left">
            <input type="text" name="GrupName" value="Grup 6" readonly>
          </div>
          <div class="right">
            <button onclick="dropGrup('grup1')"><img src="../src/folder.svg" class="goAdminProject" alt="folder"></button>
            <button><img src="../src/student.svg" alt="folder"></button>
            <button onclick="dropGrup('grup1')"><img src="../src/DownArrow.svg" alt="folder"></button>
          </div>
        </div>
      </div>
    </div>



  </div>
</body>
</html>