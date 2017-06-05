<?php
// check for submit
  if(filter_has_var(INPUT_POST, 'submit')) {
    // get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
}
function redirect($url, $statusCode = 303) {
 header('Location: ' . $url, true, $statusCode);
 die();
}
?>
