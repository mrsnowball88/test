<?php
require  './theme/layot/head.php';
?>
<!-- Page content-->
<div class="container">
    <div class="text-center mt-5">
        <h1><?=$params['tittle']?></h1>
    </div>
    <section  style="padding-bottom: 250px;" class="our-webcoderskull padding-lg">
        <div class="container">
            <div class="row heading heading-icon">
                <h1>Наша команда</h1>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
                        <h3><a href="http://www.webcoderskull.com/">Web coder skull</a></h3>
                        <p>Freelance Web Developer</p>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
                        <h3><a href="#">Kappua </a></h3>
                        <p>Freelance Web Developer</p>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
                        <h3><a href="http://www.webcoderskull.com/">Manish </a></h3>
                        <p>Freelance Web Developer</p>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="cnt-block equal-hight" style="height: 349px;">
                        <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
                        <h3><a href="http://www.webcoderskull.com/">Atul </a></h3>
                        <p>Freelance Web Developer</p>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <style>
        .glyphicon { margin-right:5px; }
        .thumbnail {
            margin-bottom: 20px;
            padding: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px
        }

        .item.list-group-item {
            float: none;
            width: 100%;
            background-color: #fff;
            margin-bottom: 10px
        }
        .item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover {
            background: rgb(105,65,152)
        }
        .item.list-group-item .list-group-image {
            margin-right: 10px
        }
        .item.list-group-item .thumbnail {
            margin-bottom: 0px
        }
        .item.list-group-item .caption {
            padding: 9px 9px 0px 9px
        }
        .item.list-group-item:nth-of-type(odd) {
            background: #eeeeee
        }
        .item.list-group-item:before, .item.list-group-item:after {
            display: table;
            content: " "
        }
        .item.list-group-item img {
            float: left
        }
        .item.list-group-item:after {
            clear: both
        }
        .list-group-item-text {
            margin: 0 0 11px
        }
    </style>

    <div class="container" lass="row col-xs-12 col-lg-12">
        <div class="well well-sm">
            <strong>Вид: </strong>
            <div class="btn-group">
                <a href="#" id="list" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-th-list"></span>Список</a>
                <a href="#" id="grid" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-th"></span>Сетка</a>
            </div>
        </div>
        <div id="products" class="row col-xs-12 col-lg-12">
            <div class="item col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="https://bootstraptema.ru/images/type/400x250.png" alt="1" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">Товар 1</h4>
                        <p class="group inner list-group-item-text">
                            Описание товара 1, Описание товара 1, Описание товара 1, Описание товара 1, Описание товара 1, Описание товара 1, Описание товара 1, Описание товара 1, Описание товара 1.
                        </p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">$350.000</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="#">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="https://bootstraptema.ru/images/type/400x250.png" alt="2" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">Товар 2</h4>
                        <p class="group inner list-group-item-text">
                            Описание товара 2, Описание товара 2, Описание товара 2, Описание товара 2, Описание товара 2, Описание товара 2, Описание товара 2, Описание товара 2, Описание товара 2.
                        </p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $250.000</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="#">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="https://bootstraptema.ru/images/type/400x250.png" alt="3" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">Товар 3</h4>
                        <p class="group inner list-group-item-text">
                            Описание товара 3, Описание товара 3, Описание товара 3, Описание товара 3, Описание товара 3, Описание товара 3, Описание товара 3, Описание товара 3, Описание товара 3.
                        </p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $150.000</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="#">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="https://bootstraptema.ru/images/type/400x250.png" alt="4" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">Товар 4</h4>
                        <p class="group inner list-group-item-text">
                            Описание товара 4, Описание товара 4, Описание товара 4, Описание товара 4, Описание товара 4, Описание товара 4, Описание товара 4, Описание товара 4, Описание товара 4.
                        </p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $200.000</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="#">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="https://bootstraptema.ru/images/type/400x250.png" alt="5" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">Товар 5</h4>
                        <p class="group inner list-group-item-text">
                            Описание товара 5, Описание товара 5, Описание товара 5, Описание товара 5, Описание товара 5, Описание товара 5, Описание товара 5, Описание товара 5, Описание товара 5.
                        </p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $320.000</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="#">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item col-xs-4 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="https://bootstraptema.ru/images/type/400x250.png" alt="6" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">Товар 6</h4>
                        <p class="group inner list-group-item-text">
                            Описание товара 6, Описание товара 6, Описание товара 6, Описание товара 6, Описание товара 6, Описание товара 6, Описание товара 6, Описание товара 6, Описание товара 6.
                        </p>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p class="lead">
                                    $21.000</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="#">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#list').click(function(event){event.preventDefault();
                $('#products .item').addClass('list-group-item');});
            $('#grid').click(function(event){event.preventDefault();
                $('#products .item').removeClass('list-group-item');
                $('#products .item').addClass('grid-group-item');});
        });
    </script>

</div>
<!--
<pre>
    <?php
print_r($_SERVER);
    ?>
</pre>
-->
<? require  './theme/layot/footer.php';