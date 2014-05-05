<?php


$to = "stian-u@hotmail.com";
$subject = "Ota muodossa:" . ' ' . $_REQUEST['name'];
$message = $_REQUEST['message'] ;
$from = $_REQUEST['email'] ;
$headers = "From:" . $from;




@mail ("$to", "$subject", "$message", "$headers");
?>

echo "Sähköpostiviesti on lähetetty. Haluat saada palautetta pian."


<!--Mailformen(http://www.w3schools.com/html/html_forms.asp)-->