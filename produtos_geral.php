<?php
include "conn/connect.php";
$lista_produtos_geral = $conn->query('select * from vw_tbprodutos order by rotulo_produtos_geral');
// busca uma linha semantica do banco de dados
// $row_produtos = $lista_produtos->fetch_assoc(); 
// busca todos os resultados do banco de dados
$rows_produtos = $lista_produtos_geral->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produtos_geral</title>
</head>
    <h2 class="breadcrumb alert-danger"><strong>produtos</strong></h2>
    <div class="row">
        <?php do {?> <!-- início da estrutura de repetição-->
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail"><!-- Abre thumbnail/card  -->
                    <a href="produto_geral.php?id_produtos=<?php echo $row_produtos['id_produtos']; ?>">
                        <img src="images/<?php echo $row_produtos['imagem_produtos']; ?>" alt=""
                        class="img-responsive img-rounded" style="height: 20em;">
                    </a>
                <?php }while($row_destaque = $lista->fetch_assoc());?>


<body>
    
</body>
</html>