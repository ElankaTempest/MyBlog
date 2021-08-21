<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>7.3</title>
</head>

<body>
<?php
    $str = 'Hello World';
    $_time_1 = hrtime(true);
    var_dump( myStrShuffle( $str ) );
    $_time_2 = hrtime(true);
    function myStrShuffle( string $str ): string
    {
        $arr1 = str_split($str);
        //print_r($arr1);
        shuffle($arr1);
        $str = join($arr1);
        return $str;
    }
        $time_diff = $_time_2 - $_time_1
    echo( "Час різниці $time_diff" );    
?>
</body>
</html>