<?php
session_start();
$mode = "input";
if (isset($_POST["back"]) && $_POST["back"]) {
  // do nothing
} else if (isset($_POST['confirm']) && $_POST["confirm"]) {
  $_SESSION["yourname"] = $_POST["fullname"];
  $_SESSION["email"] = $_POST["email"];
  $_SESSION["message"] = $_POST["message"];
  $mode = "confirm";
} else if(isset ($_POST["send"]) && $_POST["send"]) {
  $mode = "send";
} else {
  $_SESSION = array();
}