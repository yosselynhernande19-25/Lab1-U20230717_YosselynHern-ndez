<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vocales</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #999999;
            flex-direction: column;
            
        }
        form {
            background-color: #66CCFF;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            color: #fff;
            width: 350px;
        }
        h2 {
            margin-bottom: 10px;
            font-size: 1.5rem;
            text-align: center;
            color: #000099;
        }
        textarea {
            width: 90%;
            height: 50px;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 6px;
            resize: none;
            text-align: center; 
            line-height: 1;   
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px 0;
            background-color: #FFFF33;
            color: black;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #FFFFFF;
        }
        .result {
            margin-top: 20px;
            background-color: #FF99FF;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            font-size: 1.2rem;
            color: #000000;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>Contador de Vocales</h2>
        <textarea name="texto" placeholder="Ingrese un texto" required></textarea>
        <input type="submit" value="Contar Vocales">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = strtolower($_POST['texto']); 
        $vocales = ['a', 'e', 'i', 'o', 'u'];  
        $conteoVocales = array_fill_keys($vocales, 0);  

        
        foreach (str_split($texto) as $letra) { 
            if (in_array($letra, $vocales)) {
                $conteoVocales[$letra]++;
            }
        }

        echo "<div class='result'><h2>Conteo de Vocales:</h2>";
        foreach ($conteoVocales as $vocal => $cantidad) {
            echo "<p>$vocal = $cantidad</p>";
        }
        echo "</div>";
    }
    ?>
    </body>
</html>
