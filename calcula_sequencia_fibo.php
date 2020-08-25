<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calcular sequência fibonacci</title>
    </head>
    <body>
        <?php
            $numero_inserido = $_GET["valor_num"];
            $valor_anterior = 1;
            $valor_atual = 0;

            echo "0</br>1</br>";
            for($count =1; $count <= $numero_inserido -2; $count++){
                $sequencia_fibo = $valor_anterior + $valor_atual;

                echo "$sequencia_fibo</br>";

                $valor_atual = $valor_anterior;
                $valor_anterior = $sequencia_fibo;
            }
        ?>
    </body>
</html>