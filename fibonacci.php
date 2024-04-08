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

.fibonacci-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.fibonacci-box {
    width: 50px;
    height: 50px;
    border: 2px solid #333;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 5px;
    font-size: 18px;
    background-color: #fff;
}

.fibonacci-box:nth-child(odd) {
    background-color: #f2f2f2;
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