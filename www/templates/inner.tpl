<!DOCTYPE html>
<html lang="ru">

    {include "templates/head.tpl"}

    <body>

        {include "templates/topmenu.tpl"}
        {include "templates/header.tpl"}

        <div id="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7" id="content">

                        {include $pageName}

                    </div>
                    <div class="col-sm-4 col-sm-offset-1" id="roadhelp">

                        {include "templates/inner-roadhelp.tpl"}

                    </div>
                </div>
            </div>
        </div>

        {include "templates/bonus.tpl"}
        {include "templates/footer.tpl"}

    </body>
</html>