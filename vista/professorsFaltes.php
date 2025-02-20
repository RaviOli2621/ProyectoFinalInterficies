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
      <h1>Faltes</h1>
    </div>
    <div class="innlineGap"> 
      <div class="date-container">
            <input type="date" id="data" name="data" class="date-input">
            <label for="data" class="icon-container">
                <i class="fas fa-calendar-alt"><img class="img" src="../src/calendar.svg" /></i>
            </label>
        </div>
        <div class="hour-container">
            <select name="hores" id="hores">
              <option value="15:00">15:00</option>
              <option value="16:00">16:00</option>
              <option value="17:00">17:00</option>
              <option value="18:00">18:00</option>
            </select>
            <label for="hores" class="icon-container">
                <img class="img" src="../src/reloj.svg" />
            </label>
          </div> 
          <div class="hour-container">
            <select name="group" id="group">
              <option value="15:00">ASIX1 M1</option>
              <option value="16:00">DAW1 M3</option>
              <option value="17:00">DAW2 M1</option>
              <option value="18:00">ASIX2 M2</option>
            </select>
            <label for="group" class="icon-container">
                <img class="img" src="../src/people2.svg" />
            </label>
          </div>    
    </div>
    <div class="centerSeartchBar">
      <?php include dirname (__FILE__)."/Elements/searchBar.html"; ?>
    </div>
    <div class="semitransparentContLlista">
    <?php include dirname (__FILE__)."/Elements/assisAl.html"; ?>  

    </div>
  </div>
</body>
</html>