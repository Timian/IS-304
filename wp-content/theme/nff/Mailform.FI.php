
<?php

$to = "jarle@tjorhom.org";

$subject = "ta muodossa:" . ' ' . $_POST['name'];

$message = $_POST['message'] ;

$from = $_POST['email'] ;

$headers = "From:" . $from;



mail($to, $subject, $message, $headers);

?>

<p>Sähköpostiviesti on lähetetty. Haluat saada palautetta pian.</p>
<p><a href="http://tjorhom.org/bachelor">Front page</a></p>



<!--Mailformen(http://www.w3schools.com/html/html_forms.asp)-->