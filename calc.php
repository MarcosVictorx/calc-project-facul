<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculadora </title>
    <link rel="stylesheet" href="calc.css">
</head>
<body>
    <div class="container">
    
        <h1 class="resultado"> RESULTADO </h1>
        
        <br>
        
        <h2 class="meta"> Meta: 1000</h2>
        
        <?php
            $vendedor = $_POST ['vendedor'] ;
            $venda = $_POST ['venda'] ;
            $comissao = $_POST ['comissao'] ;

            
            echo "Vendedor: $vendedor <br>" ;
            echo "Valor total das vendas: $venda$ <br>" ;
            echo "Comissão: $comissao% <br>";

            
            $total = $venda * ($comissao/100) ;
            echo "A comissão do vendedor $vendedor foi de $total$.<br>" ;
            

            if ($venda >= 1000) {
                echo "Parabéns, você atingiu a meta!";
            } else {
                echo "Você não atingiu a meta, esforce-se mais no próximo mês! :(  " ;
            }
            ?>
            <br>
    </div>
    <div class="link"> <a href="./index.html"> Retornar  </a> </div>
    
</body>
</html>