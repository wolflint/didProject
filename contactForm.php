<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //checks if form  has been submitted
    if (isset($_POST['submit'])) {
        send_mail();
    } else {
      echo "<p>No POST variables. Please go back and try resubmitting the form.</p>";
    }
}

  function send_mail()
  {
      //set variables from POST
      $name = test_input($_POST['name']);
      $subject = test_input($_POST['subject']);
      $mailFrom = test_input($_POST['email']);
      $message = test_input($_POST['message']);

      //Error handlers

      //check for empty inputs
      if (empty($name) || empty($subject) || empty($mailFrom) || empty($message)) {
          header("Location: songs.php?error=emptyfields&name=".$name."&email=".$mailFrom);
          exit();
      }

      //check for an invalid e-mail.
      elseif (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
          header("Location: songs.php?error=invalidmail&name=".$name."&email=".$mailFrom);
          exit();
      } else {
          //setting email data to variables
          $mailTo = "songrequests@wolflint.one";
          $headers = "From: ".$mailFrom;
          $txt = "You have received an e-mail from ".$name.".\n\n".$message;

          //sending data to email with text formatted
          mail($mailTo, $subject, $txt, $headers);

          //reloading the page once completed and displaying email success message
          header("Location: songs.php?mailsent=successful");
          exit;
      }
  }

// Message validation for code
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
