<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,700;1,700&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Mono:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #8e7cc3ff;
}

h1 {
  font-family: 'Roboto Mono';
  font-size: min(5vw, 5vh);
  line-height: min(5vw, 5vh);
  text-align: center;
}

h2 {
  font-family: 'Roboto Mono';
  font-size: min(3vw, 3vh);
  line-height: min(3vw, 3vh);
}

p {
  font-family: 'Roboto';
  font-size: min(2.5vw, 2.5vh);
  line-height: min(2.5vw, 2.5vh);
}

dt {
  font-family: 'Roboto';
  font-size: min(2.5vw, 2.5vh);
  line-height: min(2.5vw, 2.5vh);
}

dd {
  font-family: 'Roboto';
  font-size: min(2.5vw, 2.5vh);
  line-height: min(2.5vw, 2.5vh);
}

.header {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  background-color: #b4a7d6ff;
  height: 8.5vh;
  width: 100vw;
}

.header a {
  font-family: 'Roboto Mono';
  float: left;
  color: black;
  text-align: center;
  align-content: center;
  align-items: center;
  padding-left: 1vw;
  padding-right: 1vw;
  text-decoration: none;
  font-size: min(2vw, 2vh);
  line-height: 8.5vh;
}

.header p {
  font-family: 'Roboto Mono';
  float: left;
  color: black;
  text-align: center;
  padding-left: 1vw;
  padding-right: 1vw;
  text-decoration: none;
  font-size: min(2vw, 2vh);
  line-height: 8.5vh;
  padding-top: 0px;
}

.header a.logo {
  padding-left: 1vw;
  padding-top: 1vw;
  text-align: center;
}

.header a:hover {
  background-color: #8e7cc3ff;
  color: black;
}

.header a.logo:hover {
  background-color: rgb(0,0,0,0)
}

.header a.active {
  background-color: #7765adff;
  color: black;
}

.header-right {
  display: flex;
  flex-direction: row;
}

.dropdown {
  display: flex;
  flex-direction: column;
  vertical-align: middle;
}

.dropdown-content {
  margin-top: 8.5vh;
  display: none;
  position: absolute;
  background-color: #b4a7d6ff;
  z-index: 1;
}

.dropdown-content button {
  background-color: #b4a7d6ff;
  border: none;
  color: black;
  font-family: 'Roboto Mono';
  font-size: min(2vw, 2vh);
  width: 12vw;
  height: 8vh;
}

.dropdown-content button:hover {
  background-color: #8e7cc3ff;
}

.dropdown:hover .dropdown-content{
  display: flex;
  flex-direction: column;
}

.dropdown:hover a{
  background-color: #8e7cc3ff;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

.middle {
  display: flex;
  flex-direction: column;
  height: 83vh;
  padding-left: 2vw;
  padding-right: 2vw;
  align-items: flex-start;
}

.footer {
  height: 8.5vh;
  display: flex;
  font-family: 'Roboto Mono';
  justify-content: center;
  background-color: #b4a7d6ff;
  padding-bottom: 0px;
  gap: 2vw;
}

.footer elem {
  display: flex; 
  align-items: center;
  justify-content: center;
}

.footer a {
  text-decoration: none;
  color: black;
}

.footer elem:hover {
  filter: invert(1);
  color: white;
}

</style>
</head>
<body>

<div class="header">
  <a href="index.html" class="logo"><img src="cga-logo.png" style="height:min(7vw,7vh); padding-top: 3px; padding-bottom: 0"></a>
  <div class="header-right">
    <a href="about.html">About</a>
    <div class="dropdown">
      <a href="resources.html">Resources</a>
      <div class="dropdown-content">
        <form action="software_and_club_computer.html">
          <button>Software and Club Computer</button>
        </form>
        <form action="past_workshops.html">
          <button>Past Workshops</button>
        </form>
        <form action="calendar.html">
          <button>Calendar</button>
        </form>
      </div>
    </div>
    <a href="contact.html">Contact</a>
    <a href="join.html">Join</a>
  </div>
</div>

<div class="middle">
  <h1>Contact</h1>
  <div id="fcf-form">
    <h3 class="fcf-h3">Contact us</h3>

    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Your name</label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
        </div>

        <div class="fcf-credit" id="fcf-credit">
        Simple HTML email form provided by <a href="https://www.majesticform.com" target="_blank">MajesticForm</a>
        </div>
    </form>
    </div>
</div>

<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "you@yourdomain.com";
    $email_subject = "New form submissions";

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Message'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your success message below -->

    Thank you for contacting us. We will be in touch with you very soon.

<?php
}
?>

<div class="footer">
  <elem>
  <img src="https://cdn-icons-png.flaticon.com/512/88/88264.png" style="height:min(3vh,3vw); padding-top: 0px; padding-bottom: 0px">
  <a href="mailto:cgastudios@andrew.cmu.edu" style="padding-left: 10px; font-size: min(2vh,2vw)">cgastudios@andrew.cmu.edu</a>
  </elem>
  <elem>
  <img src="https://cdn-icons-png.flaticon.com/512/1077/1077046.png" style="height:min(3vh,3vw); padding-top: 0px; padding-bottom: 0px">
  <a href="https://www.youtube.com/@CGAStudios" style="padding-left: 10px; font-size: min(2vh,2vw)" target="_blank">@CGAStudios</a>
  </elem>
  <elem>
  <img src="https://cdn-icons-png.flaticon.com/512/1936/1936319.png" style="height:min(4.5vw,4.5vh); padding-top: 5px; padding-bottom: 5px">
  <a href="https://www.instagram.com/cmu_cga/" style="padding-left: 10px; font-size: min(2vh,2vw)" target="_blank">@cmu_cga</a>
  </elem>
</div>

</body>
</html>