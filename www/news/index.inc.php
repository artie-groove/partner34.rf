<?

    $month = array();
    $month[0] = 'Январь';   $month[6] = 'Июль';
    $month[1] = 'Февраль';  $month[7] = 'Август';
    $month[2] = 'Март';     $month[8] = 'Сентябрь';
    $month[3] = 'Апрель';   $month[9] = 'Октябрь';
    $month[4] = 'Май';      $month[10] = 'Ноябрь';
    $month[5] = 'Июнь';     $month[11] = 'Декабрь';

?>
<form action="" method="post">


<div style="display:inline;" class="f11px grey">&nbsp;&nbsp;&nbsp;&nbsp;

 Месяц:&nbsp;<select name="select_month" onchange="this.form.submit();" class="f11px">
 <option value="0" >Все...</option>
  <?  foreach($monthes as $m){ ?> 
  <option value="<?=($m);?>" <?if($select_month==($m)) echo 'selected="selected"'?>><?=$month[$m-1];?></option>
  <? } ?>
 </select>
 
 &nbsp;&nbsp;

 Год:&nbsp;<select name="select_year" onchange="this.form.submit();" class="f11px">
  <? foreach($years as $year){ ?>
  <option value="<?=$year;?>" <? if($select_year==($year)) echo 'selected="select"'?> ><?=$year;?></option>
  <? } ?>
 </select>

</div>
<hr style="margin-top:10px;"/>
</form> 
<? foreach($list_all_news as $n) {?> 
<?$j=date2array($n['DATE_NEWS']);?>
<h6><a style="font-size:16px;" href="/news/display/?nid=<?=$n['UID']?>"><?=$n['TITLE']?></a><span class="newsdate"> | <?=$j['dd']?> <?=$j['dm']?> <?=$j['dy']?></span></h6>
<span class="f12px"><?=$n['LEAD']?> <!--<a href="/news/display/?nid=<?=$n['UID']?>" class="violet f11px">Подробнее...</a></span>--><div style="clear:left"></div>
<?}?>
<?
/*
<form action="" method="post">
<table width="100%"><td height="40" valign="middle" style="border-top: 1px solid #CFCFCF" class="f12px">
<div>
 Месяц:&nbsp;<select name="select_month" onchange="this.form.submit();" class="f11px">
 <option value="0" >Все...</option>
  <?  foreach($monthes as $m){ ?> 
  <option value="<?=($m);?>" <?if($select_month==($m)) echo 'selected="selected"'?>><?=$month[$m-1];?></option>
  <? } ?>
 </select>
 
 &nbsp;&nbsp;
 
 Год:&nbsp;<select name="select_year" onchange="this.form.submit();" class="f11px">
  <? foreach($years as $year){ ?>
  <option value="<?=$year;?>" <?if($select_year==($year)) echo 'selected="selected"'?> ><?=$year;?></option>
  <? } ?>
 </select>
</div>
</td>
<td height="40" valign="middle" style="border-top: 1px solid #CFCFCF" class="linkup" align="right">
<a href="#topBar">Наверх</a>&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</table>
</form> 
*/ ?>
<hr />
<div class="linkup">
<a href="#topBar">Наверх</a>&nbsp;&nbsp;&nbsp;&nbsp;</div>


