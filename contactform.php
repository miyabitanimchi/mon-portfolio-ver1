<?php
session_start();
$mode = "input";
if (isset($_POST["back"]) && $_POST["back"]) {
  // do nothing
} else if (isset($_POST["confirm"]) && $_POST["confirm"]) {
  $_SESSION["yourname"] = $_POST["yourname"];
  $_SESSION["email"] = $_POST["email"];
  $_SESSION["message"] = $_POST["message"];
  echo "hey";
  $mode = "confirm";
} else if(isset ($_POST["send"]) && $_POST["send"]) {
  echo "hey hey";
  // send button is pressed
  $message = "your message has sent, thank you!\r\n"
  ."Name" .$_SESSION["yourname"] . "\r\n"
  ."E-mail" .$_SESSION["email"] . "\r\n"
  ."Message: \r\n"
  .preg_replace("/\r\n|\r|\n/", "\r\n", $_SESSION["message"] );
  mail($_SESSION["email"], "Thank you for your message", $message);
  mail("mmyybb.mm@gmail.com", "Thank you for your message", $message);
  $_SESSION = array();
  $mode = "send";
} else {
  $_SESSION = array();
}