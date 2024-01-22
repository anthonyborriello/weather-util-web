# weather-util<br>web interface
<style>
  a {
    color: #3366cc; /* Cambia il colore del testo del link */
    text-decoration: none; /* Rimuove il sottolineato di default */
    font-weight: bold; /* Rende il testo in grassetto */
  }

  a:hover {
    text-decoration: none; 
  }
</style>
A simple web result page for the linux app weather-util.

First install the App weather-util from your Linux distro repository.

Ex:
sudo apt install weather-util

This sample php page is based on the Naples Airport (Italy).

Just change the airport name in the php file.

Add your favourite airports in the selectable list.
Example:<br>
weatehr lirn -v -q (LIRN is Naples airport, Italy) <br> weather lirf -v -q (LIRF is Fiumicino airport, Italy)

Place the files in your html folder:<br>
/var/www/html/

Link to the page 'metar.php' to show the selected airport forecast:

![Metar](https://user-images.githubusercontent.com/57049017/233770868-6e9f1caa-9551-4520-83c8-de101149dc9b.png)

Here a live example:
<a href="http://metarmeteo.hostinggratis.it/" target="_blank">Metar Meteo</a>.
