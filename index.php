<?php
session_start();
require_once 'php/books.php';

    $posts = get_posts();
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="booksstyle.css">
    <link rel="stylesheet" href="css/fonts.css"> 
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/infobookstyle.css">
    <link rel="stylesheet" href="css/zakaz.css">
    <link rel="stylesheet" href="css/basket.css">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="simplebar.css">
    <link rel="stylesheet" href="css/cartstyletwo.css">
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Alice&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/mediastyle.css">
    <link rel="stylesheet" href="modal.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="search_header2.css">
    <link rel="stylesheet" href="slider2.css">
    
    
</head>
<body>
    <div class="html">
        <?php include "header.php"; ?>
      
        <div class="section--menu">
            <div class="container__books">
                <div class="section--catalog">
                <?php foreach($posts as $post): ?>
                    <div class="grid__items" data-bb-id="<?=$post['id']?>">
                                <div class="img-product_block">
                                    <a class="product-card__img js-analytic-productlink" href="infobooks.php?post_id=<<?=$post['id']?>">
                                        <img alt="<?=$post['title']?>" title="<<?=$post['title']?>" class=" ls-is-cached lazyloaded" src="img/<?=$post['img']?>_preview.jpg">
                                    </a>
                                </div>
                                <div class="product-card">
                                    <a class="product-card__link js-watch-productlink" href="infobooks.php?post_id=<?=$post['id']?>"  title="<?=$post['title']?>">
                                        <div class="product-card__title js-analytic-product-title">
                                            <?=$post['title']?>
                                        </div>
                                        <div class="product-card__author js-analytic-product-author">
                                        <?=$post['name_author']?> <?=$post['surname']?>
                                        </div>
                                    </a>
                                    <div class="product-card__footer">
                                        <div class="product-card__price">
                                            <span class="product-price__value"><?=$post['price']?> ₽</span>
                                        </div>
                            
                                        
                                            <button type="button" class="button js__product_card_button product-card__button button_product" data-book-id="<?=$post['id']?>" >
                                                <span class="js__card_button_text" name="keep">Добавить</span>
                                            </button>
                                            
                                        
                                    </div>
                                </div>
                    </div>
                            
                <?php endforeach;?>                 
                </div>
                
            </div>
        </div>
        <?php include "footer.php"; ?>
        
        <div id="fancybox-stage">
            <form action="/" class="fancybox-container">

                <div class="filter__inner">
                    <div class="filterHead">
                        <div class="filterHead__button">
                            <h1 class="main__title">
                                Каталог
                            </h1>
                        </div>
                    </div>
                    <nuv class="nav--catalog">
                        <ul class="navigation">
                            <li class="navigation__item"><a href="" class="navigation__link">Литература</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Ужасы и мистика</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Фантастика. Фэнтези</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Романтика</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Боевики</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Детективы</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Приключения</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Знания и навыки</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Книги для детей</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">История</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Психология</a></li>
                            <li class="navigation__item"><a href="" class="navigation__link">Образование</a></li>
                        </ul>

                    </nuv>
                </div>
            </form>
         
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/popups.js"></script>
    <script src="js/filtersClick.js"></script>
    <script src="js/code.js"></script>
    <script src="js/sorts_books.js"></script>
    <script src="js/simplebar.js"></script>
    <script>
        $(document).ready(function(){
            $('.section--catalog').slick({
              slidesToShow:4,
            });
        });
    </script>

</body>
</html>