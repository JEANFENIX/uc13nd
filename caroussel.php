<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carousel</title>
</head>
<body>
    <div id="banner" class="banner-carousel_slide-carousel" data-ride="carousel"></div>
        <ol class="carousel-indicators">
            <li data-target="banners" data-slide-to="0" class="active"></li>
            <li data-target="banners" data-slide-to="1"></li>
            <li data-target="banners" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" roler="listbox">
        <div class="item-active">
            <img src="images/banner_1.jpg" alt="" class="center-block">
        </div>
        <div class="item-active">
            <img src="images/banner_2.jpg" alt="" class="center-block">
        </div>
        <div class="item-active">
            <img src="images/banner_3.jpg" alt="" class="center-block">
        </div>
        <a href="#banner" class="left carousel-control" role="button" data-side="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a href="#banner" class="left carousel-control" role="button" data-side="prev">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>

        </div>
    </div>
    
</body>
</html>