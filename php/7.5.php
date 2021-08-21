<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>7.5</title>
</head>

<body>
<form action="" method="GET">
<label for="city">Місто:</label>
<input type="text" id="city" name="city">
<button type="submit">Надіслати</button>
</form>
<?php
    $city = $_GET['city'];
    function capitalize( string $city ): string
    {
        $city_name = strip_tags($city);
        $city_name = trim($city_name);
        $city_name = strtolower($city_name);
        $city_name = ucfirst($city_name);
        return $city_name;
    }

    echo( capitalize($city) );
?>
</body>
</html>