<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin-bottom: 5px;
}

    </style>
</head>

<body>

    <div class="container">
        <h2>Sequência de Fibonacci</h2>
        <ul>
            <?php
                function fibonacci($n) {
                    $fib = [0, 1];
                    for ($i = 2; $i < $n; $i++) {
                        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
                    }
                    return $fib;
                }

                $sequencia = fibonacci(10); // Altere este número para a quantidade de números de Fibonacci que deseja mostrar
                foreach ($sequencia as $numero) {
                    echo "<li>$numero</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>