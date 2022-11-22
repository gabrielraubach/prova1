<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>

    <style>
        body {
            text-align: center;
        }

        h1{
            height: 100px;
            font-size: 50pt;
        }

        form {
            margin-top: 20px;
            margin-left: 500px;
            border: black 2px solid;
            width: 300px;
            height: 500px;
            text-align: center;
        }

        p {
            padding-top: 120px;
        }
    </style>
</head>

<body>

    <form method="POST">
        <h1><?php



            if (isset($_POST['V'])) {
                $Num = $_POST["I"];
                if (!empty($Num)) {
                    if ($Num < 0) {
                        echo "Valor Negativo";
                    } else if ($Num > 0) {
                        echo "Valor Positivo";
                    }
                } else {
                    echo "Igual a zero";
                }
            }

            ?></h1>
        <p> Digite um número!</p>
        <input type="number" name="I" value="inserir">
        <input type="submit" name="V" value="Valor">
    </form>
</body>

</html>