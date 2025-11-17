<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /**
         * @author: Véronique Grué
         * @since 15/11/2025
         * 
         * Ejercicio 0 : Mostrar el contenido de las variables superglobales y phpinfo().
         */
        echo '<h2>Contenido de las variables $_SERVER, $_COOKIE, $_SESSION, $_REQUEST, $_GET, $_POST, $_FILES, $_ENV</h2>';
        echo '<h3>Contenido de la variable $_SERVER</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_SERVER)) {
            foreach ($_SERVER as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_SERVER[' . $variable . ']</td>';
                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                //pre permite que se quede el texto talcual
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_SERVER está vacía.</em></td></tr>";
        }
        echo "</table>";

        //Contenido de la variable $_COOKIE---------------------------------------------------
        echo '<br><br><h3>Contenido de la variable $_COOKIE</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_COOKIE)) {
            foreach ($_COOKIE as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_COOKIE[' . $variable . ']</td>';
                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_COOKIE está vacía.</em></td></tr>";
        }
        echo "</table>";

        //Contenido de la variable $_SESSION-------------------------------------------------------
        echo '<br><br><h3>Contenido de la variable $_SESSION</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_SESSION)) {
            foreach ($_SESSION as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_SESSION[' . $variable . ']</td>';
                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_SESSION está vacía.</em></td></tr>";
        }
        echo "</table>";

        //Contenido de la variable $_REQUEST--------------------------------------------------
        echo '<br><br><h3>Contenido de la variable $_REQUEST</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_REQUEST)) {
            foreach ($_REQUEST as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_REQUEST[' . $variable . ']</td>';
                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                echo "</tr><br><br>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_REQUEST está vacía.</em></td></tr>";
        }
        echo "</table>";

        //Contenido de la variable $_GET-------------------------------------
        echo '<br><br><h3>Contenido de la variable $_GET</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_GET)) {
            foreach ($_GET as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_GET[' . $variable . ']</td>';
                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                echo "</tr><br><br>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_GET está vacía.</em></td></tr>";
        }
        echo "</table>";

        //Contenido de la variable $_POST-----------------------------------------
        echo '<br><br><h3>Contenido de la variable $_POST</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_POST)) {
            foreach ($_POST as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_POST[' . $variable . ']</td>';
                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_POST está vacía.</em></td></tr>";
        }
        echo "</table>";

        //Contenido de la variable $_FILES-------------------------------------------
        echo '<br><br><h3>Contenido de la variable $_FILES</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_FILES)) {
            foreach ($_FILES as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_FILES[' . $variable . ']</td>';
                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_FILES está vacía.</em></td></tr>";
        }
        echo "</table>";

        //Contenido de la variable $_ENV-----------------------------------------------------
        echo '<br><br><h3>Contenido de la variable $_ENV</h3><br>';
        echo '<table >';
        echo '<tr><th>Variable</th><th>Valor</th></tr>';
        if (!empty($_ENV)) {
            foreach ($_ENV as $variable => $resultado) {
                echo "<tr>";
                echo '<td>$_ENV[' . $variable . ']</td>';
                echo "<td><pre>" . print_r($resultado, true) . "</pre></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'><em>La variable \$_ENV está vacía.</em></td></tr>";
        }
        echo "</table><br><br>";
        ?>
    </body>
</html>
