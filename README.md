# weather-util Web Interface

A simple web interface that replicates the output of the command `weather-util`, displaying decoded METAR data fetched from NOAA.

This PHP page allows selecting an airport (for example LIRN, LIRI, LIRM, LIQC) and shows the corresponding METAR report, similar to running:

```
weather lirn -v -q
```

## Features

- Clean, minimal, responsive interface  
- Customizable airport selection list  
- Retrieves decoded METAR reports from NOAA  
- Works with lighttpd, nginx, or Apache  
- Requires only PHP  
- No external dependencies

## Installing weather-util (optional)

For comparison or CLI usage:

```bash
sudo apt install weather-util
```

Examples:

```
weather lirn -v -q
weather lirf -v -q
```

## Web Installation

1. Copy the project PHP file(s) into your web directory:

```
/var/www/html/
```

2. Ensure PHP is installed:

Example:
```bash
sudo apt install php8.4
```

3. Open the interface in your browser:

Example:
```
http://localhost/metar.php
```

## Customizing the Airport List

Edit the `<select>` section in `metar.php`:

```php
<option value="LIRN">LIRN (Naples)</option>
<option value="LIRI">LIRI (Salerno)</option>
<option value="LIRM">LIRM (Grazzanise)</option>
<option value="LIQC">LIQC (Capri)</option>
```

Add or modify airports as needed.

## METAR Source

All METAR data is fetched from NOAA:

```
https://tgftp.nws.noaa.gov/data/observations/metar/decoded/
```

## License

MIT License.

## Author

Antonio Borriello [antonioborriello.wordpress.com](https://antonioborriello.wordpress.com)

