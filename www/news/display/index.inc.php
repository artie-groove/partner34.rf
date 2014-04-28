<? if(!empty($enews)) {?> 

<?$params=date2array($enews['DATE_NEWS']);?>
<span id="date" class="f10"><?=$params['dd']?> <?=$params['dm']?> <?=$params['dy']?></span>
<H3><?=$enews['TITLE']?></H3>
<?=$enews['CONTENT']?>
<?}?>


