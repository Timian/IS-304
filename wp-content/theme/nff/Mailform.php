<?php





$to = "jarle@tjorhom.org";

$subject = "Kontaktskjema fra:" . ' ' . $_POST['name'];

$message = $_POST['message'] ;

$from = $_POST['email'] ;

$headers = "From:" . $from;









mail($to, $subject, $message, $headers);

?>



<p>Din mail har blitt sendt. Du vil få tilbakemelding innen kort tid.</p>

<p><a href="http://tjorhom.org/bachelor">Gå til forsiden</a></p>




<!--Mailformen(http://www.w3schools.com/html/html_forms.asp)-->