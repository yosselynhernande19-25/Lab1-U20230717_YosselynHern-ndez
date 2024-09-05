<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Factorial</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #FFCCCC;
            flex-direction: column;
        }
        form {
            background-color: #008000;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            color: #000000;
            width: 250px;
            text-align: center; 
        }
        h2 {
            margin-bottom: 10px;
            font-size: 1.5rem;
            color: #000000;
        }
        input[type="number"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            text-align: center; 
        }
        input[type="submit"] {
            width: 90%;
            padding: 10px;
            background-color: #CC3300;
            color: black;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
            text-align: center; 
        }
        input[type="submit"]:hover {
            background-color: #003399;
        }
        .result {
            margin-top: 30px;
            background-color: #66FFCC;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
            font-size: 1.2rem;
            color: #343a40;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <h2>Calculadora de Factorial</h2>
        <input type="number" name="numero" min="0" placeholder="Ingrese un número" required>
        <input type="submit" value="Calcular Factorial">
    </form>

    <?php
    if (isset($_GET['numero'])) {
        $numero = (int)$_GET['numero'];

        
        if ($numero < 0) {
            echo "<div class='result'>El número debe ser mayor o igual a 0.</div>";
        } else {
            $factorial = 1;

            
            for ($i = 1; $i <= $numero; $i++) {
                $factorial *= $i;
            }

            echo "<div class='result'>El factorial de $numero es $factorial.</div>";
        }
    }
    ?>
    </body>
</html>