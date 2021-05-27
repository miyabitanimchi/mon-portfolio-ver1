<?php
  session_start();

  // if the access is not from index.php, make it back to index.php
  if (!isset($_SESSION["form"])) {
    header("Location: index.php");
    exit();
  } else {
    $post = $_SESSION["form"];
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mmyybb.mm@gmail.com";
    $from = $post["email"];
    $subject = "Message from my portfolio";
    // <<< EOT 〜 EOT will be assigned to the variable $body
    $body = <<< EOT
    Name: {$post["name"]}
    E-mail: {$post["email"]}
    Message:
    {$post["message"]}
    EOT;
    mb_send_mail($to, $subject, $body, "From: {$from}");

    // delete session
    unset($_SESSION["form"]);
    header("Location: thanks.html");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./sass/main.css" />
  <title></title>
</head>
<body>
  <section id="contact-section">
    <div class="main-container">
      <h1>Get in Touch</h1>
      <form action="" method="POST" novalidate>
        <div class="name-mail-container">
          <div>
            <label for="name">Name: </label><br />
            <p><?php echo htmlspecialchars($post["name"]); ?></p>
          </div>
          <div>
            <label for="email">E-mail:</label><br />
            <p><?php echo htmlspecialchars($post["email"]); ?></p>
          </div>
        </div>
        <div class="textarea-container">
          <label for="message" class="label-message">Message: </label><br />
          <?php echo nl2br(htmlspecialchars($post["message"])); ?>
        </div>
        <a href="./index.php#contact-section">Back</a>
        <button type="submit">Send</button>
      </form>
      <footer>
        <span>&copy; 2021 Miyabi Tanimichi</span>
      </footer>
    </div>
  </section>
</body>
</html>

