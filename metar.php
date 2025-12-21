<!DOCTYPE html>
<html lang="en">
<head>
  <title>METAR</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
  <link rel="manifest" href="/icon/site.webmanifest">
  <link rel="mask-icon" href="/icon/safari-pinned-tab.svg" color="#bc1142">
  <meta name="msapplication-TileColor" content="#dc8430">
  <meta name="theme-color" content="#ffffff">
  <style>
    body {
      padding-top: 20px;
      background-color: #f4f4f4;
    }
    h1 {
      font-family: monospace;
      text-align: center;
      padding-top: 12px;
    }
    form {
      text-align: center;
      font-family: 'Verdana', sans-serif;
      margin-bottom: 12px;
    }
    .content {
      background-color: white;
      max-width: max-content;
      margin: 0 auto;
      padding-left: 45px;
      padding-right: 45px;
      padding-bottom: 40px;
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
    }
    pre {
      word-wrap: break-word;
      overflow-x: auto;
      margin: 0;
    }
    @media screen and (max-width: 710px) {
      .content {
        margin: 0 auto;
        padding-left: 20px;
        padding-right: 20px;
        box-shadow: none;
        padding-bottom: 30px;
      }
    }
  </style>
</head>
<body>
  <div class="content">
    <div class="header">
      <h1>METAR</h1>
    </div>

    <form id="metarForm" method="post" action="">
      <label for="aeroporto">Select airport:</label>
      <select id="aeroporto" name="aeroporto">
        <option value="LIRN" <?= isset($_POST['aeroporto']) && $_POST['aeroporto'] == 'LIRN' ? 'selected' : '' ?>>LIRN (Naples)</option>
        <option value="LIRI" <?= isset($_POST['aeroporto']) && $_POST['aeroporto'] == 'LIRI' ? 'selected' : '' ?>>LIRI (Salerno)</option>
        <option value="LIRM" <?= isset($_POST['aeroporto']) && $_POST['aeroporto'] == 'LIRM' ? 'selected' : '' ?>>LIRM (Grazzanise)</option>
        <option value="LIQC" <?= isset($_POST['aeroporto']) && $_POST['aeroporto'] == 'LIQC' ? 'selected' : '' ?>>LIQC (Capri)</option>
      </select>
      <button type="submit">Send</button>
    </form>

    <div id="metarContent">
      <?php
      // METAR file URL
      $aeroporto = strtoupper($_POST['aeroporto'] ?? 'LIRN');
      $url = 'https://tgftp.nws.noaa.gov/data/observations/metar/decoded/' . $aeroporto . '.TXT';

      // Get METAR content
      $metar_content = file_get_contents($url);

      // Remove ":0 and :1" from content
      $metar_content = str_replace([':0', ':1'], '', $metar_content);

      // Display METAR
      echo '<pre>';
      echo htmlspecialchars($metar_content);
      echo '</pre>';
      ?>
    </div>
  </div>
</body>
</html>

<!--
weather-util web interface
Author: Antonio Borriello
GitHub: https://github.com/anthonyborriello/weather-util-web
License: MIT License

Permission is hereby granted, free of charge, to any person obtaining a copy of this software 
and associated documentation files (the "Software"), to deal in the Software without restriction,
including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED.
-->
