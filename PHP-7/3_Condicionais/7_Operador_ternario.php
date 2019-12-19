<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operador ternário PHP</title>
</head>

<body>
    <?php
        $usuario_possui_cartao_loja = true;
        $valor_compra = 255;
        $valor_frete = 50;

        if($usuario_possui_cartao_loja == true && $valor_compra >= 100) {
            $valor_frete = 0;
        }
    ?>

    <h1>Detalhes do pedido</h1>

    <p>
        Possui cartão da loja: <?php echo ($usuario_possui_cartao_loja) ? 'Sim' : 'Não';?>
    </p>

</body>

</html>