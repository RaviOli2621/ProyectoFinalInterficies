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
<body>
  <?php include dirname (__FILE__)."/Elements/header.html"; ?>
  <div class="container">
    <div class="titulo">
      <h1>Perfil</h1>
    </div>
    <div class="innline">
      <div class="backgroundPerfil">
          <div class="innline">
            <div class="fotoPerfil"><img class="img" src="../src/perfil.svg" /></div>
            <div class="contText1"></div>
          </div>  



        <div class="innline">
          <h2>Projecte</h2>
        </div>
        <div class="innline">
          <div class="contText2">
            <div class="margen">
            Grup: 

            </div>
              <div class="group-container">
                <select name="hores" id="hores">
                  <option value="DAW1 M1">DAW1 M1</option>
                  <option value="DAW2 M2">DAW2 M2</option>
                  <option value="ASIX1 M1">ASIX1 M1</option>
                  <option value="ASIX2 M1">ASIX2 M1</option>
                </select>
              </div> 
              Data:
              <div class="innline">
                <input type="text" value="??-??-????">
                <img class="boli" src="../src/pen.svg" alt="boli">
              </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
</html>