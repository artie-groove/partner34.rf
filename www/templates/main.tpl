<!DOCTYPE html>
<html lang="ru">

    {include "templates/head.tpl" title="Центр содействия автомобилистам &laquo;Партнёр&raquo;"}

<body>

    {include "templates/header.tpl"}
    {include "templates/topmenu.tpl"}

    <div id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="col-xs-12 text-center" id="roadhelp">
                        <img src="/_img/logo.png" class="hidden-xs hidden-sm" width="100%" alt="Партнёр" id="logoimg" />

                        {include "templates/main-roadhelp.tpl"}

                	</div>
                </div>

                <div class="col-md-7 col-md-offset-1 col-sm-12 hidden-xs hidden-sm">
                    <div class="row" id="slogan">
                        <div class="col-xs-12 text-center"><h1>комплексная помощь в&nbsp;сложных ситуациях</h1></div>
                    </div>
                    <div class="row" id="main-menu-block">
                        <div class="col-sm-12 col-md-8">
                            <div class="service-item">
								<a href="/road_incident_1/"><img src="/_img/road_incident.jpg" width="100%" alt="Экспертиза ДТП" /></a>
                               	<a href="/road_incident_1/"><h3 class="h3">Экспертиза ДТП</h3></a>
                                <ul>
	                                <li><a href="/road_incident_1/">Автотехническая экспертиза дорожно-транспортного происшествия</a></li>
	                                <li><a href="/road_incident_2/">Транспортно-трасологическая экспертиза</a></li>
	                                <li><a href="/road_incident_3/">Автодорожная экспертиза</a></li>
	                                <li><a href="/road_incident_4/">Товароведческая экспертиза</a></li>
	                            </ul>
                            </div>                            
                        </div>
                        <div class="col-sm-4">
                            <div class="service-item">
                            	<a href="/examination/">
                            	    <img src="/_img/examination.jpg" width="100%" alt="Независимая экспертиза"/>
                            	    <h4 class="h4">Независимая экспертиза</h4>
                            	</a>
                            </div>
                            <br/>
                        </div>

                        <div class="col-sm-4">
                            <div class="service-item">
                            	<a href="/assessment/">
                            	    <img src="/_img/assessment.jpg" width="100%" alt="Оценка имущества"/>
                            	    <h4 class="h4">Оценка имущества</h4>
                            	</a>
                            </div>
                            <br/>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-item">
                            	<a href="/legal/">
                            	    <img src="/_img/legal.jpg" width="100%" alt="Юридические услуги"/>
                            	    <h4 class="h4">Юридические услуги</h4>
                            	</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row visible-sm visible-xs">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-sm-6">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/road_incident_1/">Экспертиза ДТП</a></li>
                                <li><a href="/examination/">Независимая экспертиза</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/assessment/">Оценка имущества</a></li>
                                <li><a href="/legal/">Юридические услуги</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {include "templates/bonus.tpl"}
    {include "templates/footer.tpl"}

</body>
</html>