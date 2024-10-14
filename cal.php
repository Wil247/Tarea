<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Bienvenidos</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="celsius.php">Celsius</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Calculator</h1>
        <br><br><br><br>

        <form method="POST" action="">
            <input type="number" name="num1" placeholder="Enter first number">
            <input type="number" name="num2" placeholder="Enter second number">

            <input type="submit" value="Calculate">
        </form>

        <?php

        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
                $Sum = $num1 + $num2;
                $Res = $num1 - $num2;
                $Mul = $num1 * $num2;

                // Validar que el segundo número no sea 0 para la división
                if ($num2 != 0) {
                    $Div = $num1 / $num2;
                } else {
                    $Div = "Undefined (Division by zero)";
                }

                // Mostrar los resultados
                echo "<h2>La suma de los valores es: " . $Sum . "</h2><br>";
                echo "<h2>La resta de los valores es: " . $Res . "</h2><br>";
                echo "<h2>La multiplicación de los valores es: " . $Mul . "</h2><br>";
                echo "<h2>La división de los valores es: " . $Div . "</h2><br>";
            }
        ?>
    </div>

    <footer>
        <p>Creado por Wilfran L. Decena</p>
    </footer>

</body>
</html>
