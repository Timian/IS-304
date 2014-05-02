<?php


$to = "stian-u@hotmail.com";
$subject = "Kontaktskjema fra:" . ' ' . $_REQUEST['name'];
$message = $_REQUEST['message'] ;
$from = $_REQUEST['email'] ;
$headers = "From:" . $from;




@mail ("$to", "$subject", "$message", "$headers");
?>

echo "Din mail har blitt sendt. Du vil bli vil få tilbakemelding innen kort tid."


<!--Mailformen(http://www.w3schools.com/html/html_forms.asp)-->