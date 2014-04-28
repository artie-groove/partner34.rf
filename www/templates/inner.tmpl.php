<!doctype html>

<html>

<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

    <!-- Latest compiled and minified CSS -->
    <!--
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    -->
    <!-- Latest compiled and minified JavaScript -->
    <!--
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    -->
    <link rel="stylesheet" href="/_css/bootstrap.min.css">
    <link rel="stylesheet" href="/_css/styles.css">
</head>

<body>

    <div class="container" id="header">
        <a href="/" title="На главную"><img src="/img/logo.jpg" alt="Партнёр" /></a>
    </div>

    <div class="container" id="content">
        <!--
      	<div class="col-md-12" id="header">
    		<img src="/img/logo.jpg" alt="Партнёр" />
	    </div>
	    -->
        <div class="col-md-9">
            <? include $content ?>            
        </div>
        <div class="col-md-3">
        	<? include 'mod_menu.inc.php' ?>
        </div>
    </div>
    <div id="footer">
        <div class="container">
            <address>
                404106, г. Волжский, пр. Ленина, 205, оф. 1 (схема проезда)<br />
                email: <a href="mailto:cbddio@mail.ru">cbddio@mail.ru</a><br />
                тел.: <nobr class="phone">+7 906-403-33-88</nobr>
            </address>
        </div>
    </div>
</body>

</html>



