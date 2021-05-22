<?php
  mail("mmyybb.mm@gmail.com", "テストでーす", "本文の内容\r\nテストでーす");
?>

<?php 
mb_language("en");
mb_list_encodings("UTF-8");
mb_send_mail("mmyybb.mm@gmail.com", "テストでーす", "本文の内容\r\nテストでーす");
?>


<?php echo "hi" ?>