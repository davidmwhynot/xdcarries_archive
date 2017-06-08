<?php
// check for submit
function processContact() {
  if(filter_has_var(INPUT_POST, 'submit')) {
    // get form data
    $name = htmlspecialchars($_POST['contact-name']);
    $email = htmlspecialchars($_POST['contact-email']);
    $message = htmlspecialchars($_POST['contact-message']);
  }
}
// redirect function
function redirect($url, $statusCode = 303) {
 header('Location: ' . $url, true, $statusCode);
 die();
}
?>
