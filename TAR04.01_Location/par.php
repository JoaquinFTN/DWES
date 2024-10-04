<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <table class="par">
            <tr>
                <td><p>Numero</p></td>
                <td><p>Cuadrado</p></td>
                <td><p>Es par o impar</p></td>
            </tr>
            <tr>
                <?php
                    echo "<td><p>".$_GET['num']."</p></td>";
                    echo "<td><p>".$_GET['cuadrado']."</p></td>";
                ?>
                <td><p>PAR</p></td>
            </tr>
        </table>
    </body>
</html>