# php-ipinfo

# Dependency
- php-curl

# Usage
```php
<?php
require("IPInfo.php");

$region = new IPInfo($_GET['ip']);

$as = $region->getAs();
$city = $region->getCity();
$country = $region->getCountry();
$countryCode = $region->getCountryCode();
$isp = $region->getIsp();
$lat = $region->getLat();
$lon = $region->getLon();
$org = $region->getOrg();
$query = $region->getQuery();
$region = $region->getRegion();
$regionName = $region->getRegionName();
$status = $region->getStatus();
$timezone = $region->getTimeZone();
$zip = $region->getZip();
?>
```
