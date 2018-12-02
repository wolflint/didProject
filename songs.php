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

  <div class="container">
    <h1>Groovy Guitar Guides - Easy to learn songs!</h1>
    <img class="u-full-width" src="https://source.unsplash.com/random/800x400" alt="Man playing acoustic guitar">
    <h2 id="song-list">Song List:</h2>
    <ul class="song-list">
      <li>
        <hr><a href="#song1"><i class="fas fa-music"></i> The Amazing Song 1 by The Song Artist</a></li>
      <li>
        <hr><a href="#song2"><i class="fas fa-music"></i> Song 2 is Fantastic by The Song Artist</a></li>
      <li>
        <hr><a href="#song3"><i class="fas fa-music"></i> Song 3 by The Song Artist</a></li>
      <li>
        <hr><a href="#song4"><i class="fas fa-music"></i> Song 4 by The Song Artist</a></li>
      <li>
        <hr><a href="#song5"><i class="fas fa-music"></i> Song 5 by The Song Artist</a></li>
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
    <h1 id="song1">Song 1</h1>
    <!-- SONG VIDEO -->
    <video class="u-full-width" controls src="https://archive.org/download/BigBuckBunny_124/Content/big_buck_bunny_720p_surround.mp4" poster="https://peach.blender.org/wp-content/uploads/title_anouncement.jpg?x11217" width="620">

      Sorry, your browser doesn't support embedded videos,
      but don't worry, you can <a href="https://archive.org/details/BigBuckBunny_124">download it</a>
      and watch it with your favorite video player!
    </video>
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

  <div class="container">
    <!-- SONG NAME -->
    <h1 id="song2">Song 2</h1>
    <!-- SONG VIDEO -->
    <video class="u-full-width" controls src="https://archive.org/download/BigBuckBunny_124/Content/big_buck_bunny_720p_surround.mp4" poster="https://peach.blender.org/wp-content/uploads/title_anouncement.jpg?x11217" width="620">

      Sorry, your browser doesn't support embedded videos,
      but don't worry, you can <a href="https://archive.org/details/BigBuckBunny_124">download it</a>
      and watch it with your favorite video player!
    </video>
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
