<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <!-- Agregamos un script para recargar la página cada segundo -->
    <script>
        setInterval(function() {
            location.reload();
        }, 2000); // Recargar cada 1000 milisegundos (1 segundo)
    </script>
</head>
<body>

    <header>
        <h1>Bienvenidos</h1>
        <nav>
            <ul>
                <li><a href="celsius.php">Celsius</a></li>
                <li><a href="cal.php">Add</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Topics for the PISA Test</h1>

        <?php
            // Obtener la fecha y hora actual
            $tiempo = time(); // Devuelve la hora actual en segundos desde el Epoch (Unix timestamp)

            // Generar un número aleatorio
            $random = rand(1, 60);

            // Comprobar si la división es par o impar
            if (($tiempo / $random) % 2 == 0) {
                // Si es par, mostrar la tabla
                echo "
                <table>
                    <thead>
                        <tr>
                            <th>Topic</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Listening</td>
                            <td>Focuses on the comprehension of spoken texts such as conversations, announcements, and presentations.</td>
                        </tr>
                        <tr>
                            <td>Reading</td>
                            <td>Tests the ability to understand and interpret written texts, such as articles and essays.</td>
                        </tr>
                        <tr>
                            <td>Speaking</td>
                            <td>Evaluates students' abilities to express their ideas verbally and engage in dialogues.</td>
                        </tr>
                    </tbody>
                </table>";
            } else {
                // Si es impar, mostrar otro contenido
                echo "<p>No se muestra la tabla en este momento.</p>";
            }
        ?>
    </div>

    <footer>
        <p>Creado por Wilfran L. Decena</p>
    </footer>

</body>
</html>
