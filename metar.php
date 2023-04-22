<!DOCTYPE html>
<html lang="en">
<head>
  <title>METAR</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1,0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png">
  <link rel="icon" type="/icon/image/png" sizes="32x32" href="/icon/favicon-32x32.png">
  <link rel="icon" type="/icon/image/png" sizes="16x16" href="/icon/favicon-16x16.png">
  <link rel="manifest" href="/icon//site.webmanifest">
  <link rel="mask-icon" href="/icon/safari-pinned-tab.svg" color="#bc1142">
  <meta name="msapplication-TileColor" content="#dc8430">
  <meta name="theme-color" content="#ffffff">
<style>
body {
  padding-top: 20px;
}
h1 {
  font-family: monospace;
  text-align: center;
  padding-top: 12px;
  padding-bottom: 4px;
}
form {
  text-align: center;
  font-family: 'Verdana' , sans-serif;
}
#caricamento {
  display: none;
  font-family: 'Verdana' , sans-serif;
  text-align: center;
  padding-top: 20px;
}
.content {
  max-width: max-content;
  margin: 0 auto;
  padding-left: 45px;
  padding-right: 45px;
  padding-bottom: 45px;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
}
pre {
  word-wrap: break-word;
  overflow-x: auto;
  overflow-y: hidden;
  margin-bottom: 0;
}
/* On screens that are 710px wide or less, make the shadow disappear */
@media screen and (max-width: 710px) {
.content {
  margin: 0 auto;
  padding-left: 20px;
  padding-right: 20px;
  box-shadow: none;
 }
pre {
  word-wrap: break-word;
  overflow-x: auto;
  overflow-y: hidden;
  margin-bottom: 0;
  padding-bottom: 30px; /* A bit of padding to match the space of Wireless Check page */
 }
}
</style>
</head>
<body>
<div class="content">
<form method="post" action="">
  <h1>METAR</h1>
  <label for="aeroporto">Seleziona il codice dell'aeroporto:</label>
  <select id="aeroporto" name="aeroporto">
    <option value="lirn" <?= $_POST['aeroporto'] == 'lirn' ? 'selected' : '' ?>>LIRN (Napoli)</option>
    <option value="liri" <?= $_POST['aeroporto'] == 'liri' ? 'selected' : '' ?>>LIRI (Salerno)</option>
	<option value="lirm" <?= $_POST['aeroporto'] == 'lirm' ? 'selected' : '' ?>>LIRM (Grazzanise)</option>
    <option value="liqc" <?= $_POST['aeroporto'] == 'liqc' ? 'selected' : '' ?>>LIQC (Capri)</option>
  </select>
  <input type="submit" value="Invia">
</form>

<p id="caricamento">Caricamento in corso...</p>
<!-- Codice JavaScript per gestire il caricamento -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
  // Mostra il messaggio di caricamento quando si invia il form
  $("form").submit(function() {
    // Nascondi il contenuto del METAR
    $("pre").hide();
    // Mostra il messaggio di caricamento
    $("#caricamento").show();
  });
</script>

<?php
// Inizio del codice PHP per eseguire il comando weather-util

// Controlla se è stato inviato un valore per il codice dell'aeroporto
if (isset($_REQUEST['aeroporto'])) {
  // Se è stato inviato un valore, ottienilo
  $aeroporto = $_REQUEST['aeroporto'];

  // Esegui il comando weather-util con i parametri desiderati
  $output = shell_exec("weather $aeroporto -v -q");

  // Crea un quadratino e inserisci l'output del comando all'interno
  echo "<pre>$output</pre>";
}

// Fine del codice PHP
?>
 // An idea of Antonio Borriello https://antonioborriello.wordpress.com/
</div>
</body>
</html>

