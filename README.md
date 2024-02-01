# weather-util<br>web interface

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

![Metar](https://github.com/anthonyborriello/weather-util-web/assets/57049017/2cc26817-ecce-408a-bcc6-48f3cacf11ab)

Link to the page 'metar.php' to show the selected airport forecast:



Here a live example:
<a href="http://metarmeteo.hostinggratis.it/" target="_blank">Metarmeteo.it</a>

In this case i only used the NOAA databse bypassing wetaher-util commands.

