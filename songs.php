<?php
if (isset($_GET['error'])) {
    //empty filed error message
    if ($_GET['error'] == "emptyfields") {
        echo '<script language="javascript">';
        echo 'alert("Incomplete request form. Please fill in all of the fields.")';
        echo '</script>';
    }
    //invalid email error message
    elseif ($_GET['error'] == "invalidmail") {
        echo '<script language="javascript">';
        echo 'alert("Invalid email. Please enter a valid email address.")';
        echo '</script>';
    }
}
// create a success message if message was sent
elseif (isset($_GET["mailsent"])) {
    if ($_GET["mailsent"] == "successful") {
        echo '<script language="javascript">';
        echo 'alert("Message was successfully sent.")';
        echo '</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Groovy Guitars - Songs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/songs.css">
  <link rel="shortcut icon" type="image/png" href="assets/logo.png">
</head>

<body>
  <div class="gradient"></div>

  <?php include 'navBar.php'; ?>

  <!-- SONG LIST -->
  <div class="container">
    <h1>Groovy Guitar Guides - Easy to learn songs!</h1>
    <img class="u-full-width" src="assets/songsImage.jpeg" alt="Picture of acoustic guitar">
    <h2 id="song-list">Song List:</h2>
    <ul class="song-list">
      <li>
        <hr><a href="#song1"><i class="fas fa-music"></i> The Cranberries - Zombie</a></li>
      <li>
        <hr><a href="#song2"><i class="fas fa-music"></i> Leonard Cohen - Hallelujah</a></li>
      <li>
        <hr><a href="#song3"><i class="fas fa-music"></i> Pink Floyd - Wish You Were Here</a></li>
    </ul>
  </div>



  <div class="container">
    <!-- contact form -->
    <h2>Request a Song</h2>
    <form action="contactForm.php" method="post">
      <?php
          // Check if name was already submitted
          if (!empty($_GET["name"])) {
              echo '<input type="text" name="name" placeholder="Full Name" value="'.$_GET["name"].'"><br>';
          } else {
              echo '<input type="text" name="name" placeholder="Full Name"><br>';
          }

          // Check if email was already submitted
          if (!empty($_GET["email"])) {
              echo '<input type="text" name="email" placeholder="E-mail" value="'.$_GET["email"].'"><br>';
          } else {
              echo '<input type="text" name="email" placeholder="E-mail"><br>';
          }
          ?>
      <input type="text" name="subject" placeholder="Subject">
      <textarea name="message" rows="8" cols="60" placeholder="Message"></textarea>
      <button class="button-primary right" type="submit" name="submit"> Send Mail </button>
    </form>
  </div>



  <div class="container">
    <!-- SONG NAME -->
    <h1 id="song1">The Cranberries - Zombie</h1>
    <!-- SONG VIDEO -->
    <div class="iframe-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/gCVh1UgOvIA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="button-grid">
      <!-- SONG SHEET DOWNLOAD -->
      <a href="assets/songsheets/CranberriesZombie.pdf" download>
        <button class="left button-primary">
          <i class="fas fa-download"></i>
          Songsheet
        </button></a>
      <!-- SONG LIST LINK -->
      <a href="#song-list"><button class="right button-primary">Song List <i class="fas fa-level-up-alt"></i></button></a>
    </div>
  </div>



  <div class="container">
    <!-- SONG NAME -->
    <h1 id="song2">Leonard Cohen - Hallelujah</h1>
    <div class="iframe-container">
      <iframe class="u-full-width" width="560" height="315" src="https://www.youtube.com/embed/KJ-mNXwPhrg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="button-grid">
      <!-- SONG SHEET DOWNLOAD -->
      <a href="assets/songsheets/LeonardCohenHallelujah.pdf" download>
        <button class="left button-primary">
          <i class="fas fa-download"></i>
          Songsheet
        </button></a>
      <!-- SONG LIST LINK -->
      <a href="#song-list"><button class="right button-primary">Song List <i class="fas fa-level-up-alt"></i></button></a>
    </div>
  </div>



  <div class="container">
    <!-- SONG NAME -->
    <h1 id="song3">Pink Floyd - Wish You Were Here</h1>
    <!-- SONG VIDEO -->
    <div class="iframe-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/atrTmea3DNg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="button-grid">
      <!-- SONG SHEET DOWNLOAD -->
      <a href="assets/songsheets/pinkFloydWishYouWereHere.pdf" download>
        <button class="left button-primary">
          <i class="fas fa-download"></i>
          Songsheet
        </button></a>
      <!-- SONG LIST LINK -->
      <a href="#song-list"><button class="right button-primary">Song List <i class="fas fa-level-up-alt"></i></button></a>
    </div>
  </div>

  <!-- SCRIPTS -->
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/scripts.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
</body>

</html>
