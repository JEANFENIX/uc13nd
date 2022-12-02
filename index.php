<?php ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link para css bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- link para css personalizado/proprio -->
    <link rel="stylesheet" href="css/estilo.css">
    <title>Bovinos Fenix</title>
</head>

<body class="fundofixo">
    <!-- Área de menu -->
    <?php include 'menu_publico.php'; ?>
    <a nome="home">&nbsp;</a>
    <main class="container">
        <!-- Area do caroussel -->
        <?php include "caroussel.php"; ?>
        <!-- Área em destaques -->
        <a name="destaques">&nbsp;</a>
        <?php include 'produtos_destaques.php'; ?>
        <!-- Área dos produtos em geral -->
        <a name="produtos">&nbsp;</a>
        <?php include 'produtos_geral.php'; ?>

        
        <!-- Rodapé -->
        <footer class="panel-footer" style="background: nome;">
            <?php include 'rodape.php'; ?>
            <a name="contato">&nbsp;</a>
        </footer>


</body>
<!-- Link arquivos Bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</html>