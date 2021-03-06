<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Groovy Guitars - Songs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/game.css" />
    <link rel="shortcut icon" type="image/png" href="assets/logo.png" />
    <script src="js/game.js"></script>
  </head>

  <body>
    <div class="gradient"></div>

    <?php include 'navBar.php'; ?>

    <!-- Audio Files -->
    <div>
      <audio id="blueSound" src="./assets/notes/e2.mp3">
        Your browser does not support the <code>audio</code> element.
      </audio>
      <audio id="greenSound" src="./assets/notes/a2.mp3">
        Your browser does not support the <code>audio</code> element.
      </audio>
      <audio id="redSound" src="./assets/notes/d3.mp3">
        Your browser does not support the <code>audio</code> element.
      </audio>
      <audio id="yellowSound" src="./assets/notes/g3.mp3">
        Your browser does not support the <code>audio</code> element.
      </audio>
      <audio id="purpleSound" src="./assets/notes/b3.mp3">
        Your browser does not support the <code>audio</code> element.
      </audio>
      <audio id="pinkSound" src="./assets/notes/e4.mp3">
        Your browser does not support the <code>audio</code> element.
      </audio>
    </div>

    <section id="game">
      <!-- Game Container -->
      <div class="container">
        <!-- Game Config Controls -->

        <h1 class="game-header">E Standard</h1>
        <p id="strict-indicator"></p>
        <div class="counter-container"><p id="counter">Off</p></div>

        <!-- Game Buttons -->
        <div id="btn-group">
          <button id="pwr-btn" class="control-btn">On/Off</button>
          <button id="reset-btn" class="control-btn">Reset</button>
          <button id="idBtnpink" class="game-btn btn--pink">E4</button>
          <button id="idBtnpurple" class="game-btn btn--purple">B3</button>
          <button id="idBtnyellow" class="game-btn btn--yellow">G3</button>
          <button id="idBtnred" class="game-btn btn--red">D3</button>
          <button id="idBtngreen" class="game-btn btn--green">A2</button>
          <button id="idBtnblue" class="game-btn btn--blue">E2</button>
        </div>
      </div>
      <!-- End of Game Container -->
    </section>

    <!-- SCRIPTS -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
