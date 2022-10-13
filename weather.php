<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
   initial-scale=1.0, minimum-scale=1.0, maximum-scale=1,0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>METAR LIRN</title>
  <style>
    .metar_lirn {
      font-family: monospace;
    }
    h1 {
      text-align: center;
    }
    .table {
      display: table;
      margin-top: 30px;
      margin-left: auto;
      margin-right: auto;
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
      padding-left: 30px;
      padding-right: 30px;
      padding-bottom: 10px;
    }
    /* weather-util-web is an idea of Antonio Borriello based on the weather-util app */
    /* https://github.com/anthonyborriello */
  </style>
</head>
<body>
  <div class="table">
    <div class="metar_lirn">
    <h1>METAR LIRN<h1>
    </div>
    <div>
    <?php
        $output = shell_exec('sh /var/www/html/weather.sh');
        echo "<pre>$output</pre>";
     ?>
    </div>
   </div>
</body>
</html>
