<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <!-- Agregamos un script para recargar la página cada 3.33 segundos -->
    <script>
        setInterval(function() {
            location.reload();
        }, 3330); // Recargar cada 3.33 segundos
    </script>
</head>
<body>

    <header>
        <h1>Bienvenidos</h1>
        <nav>
            <ul>
                <li><a href="indexphp">Home</a></li>
                <li><a href="cal.php">Add</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Show Celsius Automatically</h1>
        <br><br><br><br>

        <?php
            $tiempo = time(); 

            // Generar un número aleatorio entre 1 y 60
            $random = rand(1, 60);

            // Comprobar si la división es par o impar
            if (($tiempo / $random) % 2 == 0) {
              
                // Convertir Fahrenheit a Celsius
                $Celsius = (5/9) * ($random - 32);

                // Mostrar el resultado
                echo "<h2>El Celsius de " . $random . " Fahrenheit es: " . $Celsius . "</h2>";

            } else {
                // Si es impar, mostrar otro contenido
                echo "<h2>El tiempo tiene un número impar en el módulo.</h2>";
            }
        ?>
    </div>

    <footer>
        <p>Creado por Wilfran L. Decena</p>
    </footer>

</body>
</html>
