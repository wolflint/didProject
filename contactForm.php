<?php

// Checks if reCAPTCHA has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//checks if form  has been submitted
        if (isset($_POST['submit'])) {

  //grabbing data from form
            $name = test_input($_POST['name']);
            $subject = test_input($_POST['subject']);
            $mailFrom = test_input($_POST['mail']);
            $message = test_input($_POST['message']);

            //Error handlers

            //checking for empty inputs
            if (empty($name) || empty($subject) || empty($mailFrom) || empty($message)) {
                header("Location: songs.php?error=emptyfields&name=".$name."&mail=".$mailFrom);
                exit();
            }

            //checking for an invalid e-mail.
            elseif (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
                header("Location: songs.php?error=invalidmail&name=".$name."&mail=".$mailFrom);
                exit();
            } else {
                //setting data to variables
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
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
