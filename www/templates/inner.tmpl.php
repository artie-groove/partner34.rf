<!DOCTYPE html>
<html lang="ru">
<head>
    <link href='http://fonts.googleapis.com/css?family=Russo+One&subset=cyrillic' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/_css/bootstrap.min.css">
    <link rel="stylesheet" href="/_css/styles.css">
    <link rel="stylesheet" href="/_css/lightbox.css" />
    <script type="text/javascript" src="/_js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/_js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/_js/lightbox.min.js"></script>
    <title>Центр помощи автомобилистам &laquo;Партнёр&raquo;</title>
</head>

<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ri-collapse">
                <span class="sr-only">Переключить навигацию</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Услуги</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="ri-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Экспертиза ДТП <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/road_incident_1">Автотехническая экспертиза ДТП</a></li>
                        <li><a href="/road_incident_2">Транспортно-трасологическая экспертиза</a></li>
                        <li><a href="/road_incident_3">Автодорожная экспертиза</a></li>
                        <li class="divider"></li>
                        <li><a href="/road_incident_4">Товароведческая экспертиза</a></li>
                    </ul>
                </li>
                <li><a href="/examination/">Независимая экспертиза</a></li>
                <li><a href="/assessment/">Оценка имущества</a></li>
                <li><a href="/legal/">Юридические услуги</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-4" id="logo">
                <h1><a href="/">Партнёр</a></h1>
                <p>служба комплексного содействия</p>
            </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-xs-7">
                                <address>
                                    <h4>Волгоград<br /><span class="small">ул.&nbsp;Хиросимы,&nbsp;16&thinsp;б</span></h4>
                                    <table>
                                        <col width="30" />
                                        <tr>
                                            <td rowspan="2"><span class="glyphicon glyphicon-phone-alt"></span></td>
                                            <td><nobr class="phone">(+7 8442) 98-05-88</nobr></td>
                                        </tr>
                                        <tr>
                                            <td><nobr class="phone">(+7 8442) 98-04-88</nobr></td>
                                        </tr>
                                        <tr>
                                            <td><span class="glyphicon glyphicon-earphone"></span></td>
                                            <td>+7 987-647-51-34</td>
                                        </tr>
                                    </table>
                                </address>
                            </div>
                            <div class="col-xs-5 routeto">
                                <a href="/map_vgd/"><span class="glyphicon glyphicon-circle-arrow-right"></span><br />схема<br />проезда</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-xs-7">
                                <address>
                                    <h4>Волжский<br /><span class="small">пр.&nbsp;Ленина,&nbsp;205,&nbsp;оф.&nbsp;1</span></h4>
                                    <span class="glyphicon glyphicon-earphone"></span>&nbsp;<nobr class="phone">+7 906-403-33-88</nobr>
                                </address>
                            </div>
                            <div class="col-xs-5 routeto">
                                <a href="/map_vlz/"><span class="glyphicon glyphicon-circle-arrow-right"></span><br />схема<br />проезда</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-7" id="content">
                <? include $content ?>
            </div>
            <div class="col-sm-4 col-sm-offset-1" id="roadhelp">
                <h4 class="h4">Помощь на дороге</h4>
                <p class="q">У&nbsp;вас пробило колесо?<br />Закончился бензин?<br />Не&nbsp;заводится машина?</p>
                <p>Высококвалифицированные мастера прибудут к&nbsp;вам на&nbsp;место и&nbsp;произведут мелкий ремонт.</p>
                <p class="text-info small">При невозможности выполнения ремонта на&nbsp;месте доставят ваш автомобиль в&nbsp;автомастерскую.</p>
                <br />
                <p class="q">У вас произошло ДТП?</p>
                <p>Наши специалисты могут выехать к&nbsp;вам на&nbsp;место и&nbsp;оформить ДТП <a data-toggle="collapse" href="#details">без участия сотрудников полиции</a>* или помочь при оформлении административного материала.</p>

                <div class="collapse text-info" id="details">
                    <p>* Без участия сотрудников полиции можно оформить ДТП при наличии одновременно следующих обстоятельств.</p>
                    <ol>
                        <li>В&nbsp;результате ДТП вред причинён только имуществу.</li>
                        <li>В&nbsp;ДТП участвовало только два транспортных средства, гражданская ответственность которых застрахована в&nbsp;соответствии с&nbsp;законодательством&nbsp;РФ.</li>
                        <li>Обстоятельства и&nbsp;повреждения автомобилей не&nbsp;вызывают разногласий у&nbsp;участников ДТП.</li>
                    </ol>
                    <br/>
                    <p class="well text-info small" id="remark">Если автомобиль застрахован по&nbsp;КАСКО, необходимо оформление ДТП сотрудниками полиции, для дальнейшего обращения с&nbsp;страховую компанию.</p>
                </div>
            </div>

            <!--
            <div class="col-sm-4 col-sm-offset-1" id="bonus">
                <h4 class="h4">Сопровождение и&nbsp;представительство в&nbsp;страховых компаниях</h4>
                <p class="q">Вы&nbsp;покупаете автомобиль и&nbsp;не&nbsp;знаете, как и&nbsp;где его застраховать? Или разнообразие предложений не&nbsp;позволяет выбрать оптимальный?</p>
                <p class="a">Наши специалисты помогут вам: проконсультируют и&nbsp;при необходимости сопроводят в&nbsp;страховую компанию по&nbsp;условиям КАСКО и&nbsp;ОСАГО.</p>
                <br />
                <p class="q">У&nbsp;вас произошёл страховой случай и&nbsp;вы&nbsp;не&nbsp;знаете, что дальше делать?</p>
                <p class="a">Мы&nbsp;рады вам помочь! Наши специалисты подготовят все необходимые документы. А&nbsp;также при необходимости сопроводят вас в&nbsp;страховую компанию или сделают это за&nbsp;вас.</p>
            </div>
            -->

        </div>
    </div>
</div>

<!--
<div id="bonus">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="h3">Сопровождение и&nbsp;представительство в&nbsp;страховых компаниях</h3>
                <p class="q">Вы&nbsp;покупаете автомобиль и&nbsp;не&nbsp;знаете, как и&nbsp;где его застраховать? Или разнообразие предложений не&nbsp;позволяет выбрать оптимальный?</p>
                <p class="a">Наши специалисты помогут вам: проконсультируют и&nbsp;при необходимости сопроводят в&nbsp;страховую компанию по&nbsp;условиям КАСКО и&nbsp;ОСАГО.</p>
                <br />
                <p class="q">У&nbsp;вас произошёл страховой случай и&nbsp;вы&nbsp;не&nbsp;знаете, что дальше делать?</p>
                <p class="a">Мы&nbsp;рады вам помочь! Наши специалисты подготовят все необходимые документы. А&nbsp;также при необходимости сопроводят вас в&nbsp;страховую компанию или сделают это за&nbsp;вас.</p>
            </div>
        </div>
    </div>
</div>
-->

<div id="bonus">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <br />
                <img src="/_img/osago.jpg" width="100%" class="photoframe hidden-xs hidden-sm" alt="Сопровождение и&nbsp;представительство в&nbsp;страховых компаниях"/>
            </div>
            <div class="col-md-7 col-md-offset-1">
                <h3 class="h3">Сопровождение и&nbsp;представительство в&nbsp;страховых компаниях</h3>
                <p class="q">Вы&nbsp;покупаете автомобиль и&nbsp;не&nbsp;знаете, как и&nbsp;где его застраховать? Или разнообразие предложений не&nbsp;позволяет выбрать оптимальный?</p>
                <p class="a">Наши специалисты помогут вам: проконсультируют и&nbsp;при необходимости сопроводят в&nbsp;страховую компанию по&nbsp;условиям КАСКО и&nbsp;ОСАГО.</p>
                <br />
                <p class="q">У&nbsp;вас произошёл страховой случай и&nbsp;вы&nbsp;не&nbsp;знаете, что дальше делать?</p>
                <p class="a">Мы&nbsp;рады вам помочь! Наши специалисты подготовят все необходимые документы. А&nbsp;также при необходимости сопроводят вас в&nbsp;страховую компанию или сделают это за&nbsp;вас.</p>
            </div>
        </div>
    </div>
</div>



<div id="footer">
    <div class="container">
        <div class="row hidden-xs">
            <div class="col-sm-6">
                <address>
                    400050, г.&nbsp;Волгоград, ул.&nbsp;Хиросимы,&nbsp;16&thinsp;б<br />
                    тел.: <nobr class="phone">(+7 8442) 98-05-88</nobr>, <nobr class="phone">(+7 8442) 98-04-88</nobr><br />тел.: <nobr class="phone">+7 987-647-51-34</nobr><br />
                </address>
            </div>
            <div class="col-sm-6">
                <address>
                    404106, г.&nbsp;Волжский, пр.&nbsp;Ленина,&nbsp;205,&nbsp;оф.&nbsp;1<br />
                    тел.: <nobr class="phone">+7 906-403-33-88</nobr><br />
                    email: <a href="mailto:cbddio@mail.ru">cbddio@mail.ru</a><br />
                </address>
            </div>
        </div>
        <div class="row visible-xs">
            <address>
                <table class="vtop">
                    <col width="100" />
                    <tr>
                        <td>Волгоград:</td>
                        <td><nobr class="phone">(+7 8442) 98-05-88</nobr>, <nobr class="phone">98-04-88</nobr><br /><nobr class="phone">+7 987-647-51-34</nobr></td>
                    </tr>
                    <tr>
                        <td>Волжский:</td>
                        <td><nobr class="phone">+7 906-403-33-88</nobr></td>
                    </tr>
                </table>
            </address>
        </div>
    </div>
</div>


</body>
</html>