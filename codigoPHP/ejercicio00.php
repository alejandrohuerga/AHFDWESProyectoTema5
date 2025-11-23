<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TEMA 5: EJERCICIO 00</title>
        <style>
            *{
                margin: 0 auto;
            }
            
            header{
                width: 100%;
                height: 15vh;
                background: rgb(79, 91, 147);
                color: white;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            
            header h2{
                color: white;
            }
            
            h2{
                text-align: center;
                width: 100%;
                color: blue
            }
            h3{
                text-align: center;
            }
            section{
                width:100%;
                margin-left:0;
                padding-right:50px;
            }
            table {
                border-collapse: collapse;
                width: 80%;
                border: 2px solid black;
                background-color: #f9f9f9;
                font-family: Arial, sans-serif;
            }
            th, td {
                border: 1px solid black;
                padding-left: 8px;


            }
            th {
                background-color: #9999cc;
                padding: 8px;
                text-align: center;

            }
            td:nth-child(even) {
                /*seleciona los elemenos pares*/
                background-color: #DDDDDD;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                font-weight: 400;
                margin-right:50px;
            }
            td:nth-child(odd) {
                /*seleciona los elemenos impares*/
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                font-weight: 700;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Alejandro De la Huerga</h1>
            <h2>EJERCICIO 00</h2>
        </header>
        <main>
            <section>
                
                <?php
                /**
                 * @author: Alejandro De la Huerga
                 * @since 23/11/2025
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
            </section>
        </main>
    </body>
</html>
