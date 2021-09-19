<?php
$filepath = './data/cities.csv';
if( file_exists( $filepath ) )
    {
    if( $handle = fopen( $filepath, 'r' ) )
        {
            $city_mil = [];
            while(( $row = fgetcsv( $handle, 0, ',' ) )!==false)
                {
                if ( $row[4]>1000000)
                    {
                        $city_mil[] = $row;
                    } 
                }
                fclose( $handle );

                $site = './data/cities.html';
                if( $site_city = fopen( $site, 'w' ) )
                    {
                        $html_header = '
                        <!DOCTYPE html>
                        <html lang="uk">
                            <head>
                                <meta charset="utf-8">
                                <title>7.6</title>
                            </head>
                            <body>
                                <table>
                                    <tr>
                                        <th>Місто</th>
                                        <th>Країна</th>
                                        <th>Населення</th>
                                        <th>Координати</th>
                                    </tr>';

                        $html_footer = '
                                </table>
                            </body>
                        </html>';

                        fwrite( $site_city, $html_header );

                        foreach(  $city_mil as $city )
                        {
                            fwrite( $site_city, '
                            <tr>
                                        <td>' . $city[0] . ' </td>
                                        <td>' . $city[3] . '</td>
                                        <td>' . $city[4] . '</td>
                                        <td>' . $city[1] . ', ' . $city[2] . '</td>
                                    </tr>
                            ' );
                        }

                        fwrite( $site_city, $html_footer );
                        
                        fclose($site_city);

                        header('Location: /php/data/cities.html');

                        echo('OK');
                    }
                else
                    {
                        echo( 'Помилка: немає доступу' );
                    }

                //chmod( '/data/cities.html', 0644 );
            }
        else
            {
            echo( 'Помилка: файл не відкрито' );
            }
        }
else
    {
    echo( 'Помилка: файл не існує' );
    }

?>