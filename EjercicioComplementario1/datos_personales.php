<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
    <title>Datos Personales</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nobile">
    <link rel="stylesheet" href="css/tables.css">
    <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
<section>
        <article>
            <div id="info">
                <table id="hor-zebra" summary="Datos recibidos del formulario">
                    <caption>Datos Personales</caption>
                    <thead>
                        <tr class="thead">
                            <th scope="col">Información</th>
                            <th scope="col">Dato</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nombre = "Adilson Arian Montes Martinez";
                        $lugar_naci = "San Salvador, El Salvador";
                        $edad = 20;
                        $carnet = "MM200149";

                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nCliente\n</td>\n";
                        echo "\t\t<td>\n" . $nombre . "\n</td>\n";
                        echo "\t<tr>\n";
                        
                        
                        echo "\t\t<td>\nLugar Nacimiento\n</td>\n";
                        echo "\t\t<td>\n" . $lugar_naci . "\n</td>\n";
                        echo "\t<tr>\n";
                        
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nEdad\n</td>\n";
                        echo "\t\t<td>\n" . $edad . "\n</td>\n";
                        echo "\t<tr>\n";
                        
                        echo "\t\t<td>\nCarnet\n</td>\n";
                        echo "\t\t<td>\n" . $carnet . "\n</td>\n";
                        echo "\t<tr>\n";

                        ?>
                    </tbody>
                </table>
            </div>
        </article>
    </section>
</body>
</html>