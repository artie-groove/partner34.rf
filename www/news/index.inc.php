<?

    $month = array();
    $month[0] = '������';   $month[6] = '����';
    $month[1] = '�������';  $month[7] = '������';
    $month[2] = '����';     $month[8] = '��������';
    $month[3] = '������';   $month[9] = '�������';
    $month[4] = '���';      $month[10] = '������';
    $month[5] = '����';     $month[11] = '�������';

?>
<form action="" method="post">


<div style="display:inline;" class="f11px grey">&nbsp;&nbsp;&nbsp;&nbsp;

 �����:&nbsp;<select name="select_month" onchange="this.form.submit();" class="f11px">
 <option value="0" >���...</option>
  <?  foreach($monthes as $m){ ?> 
  <option value="<?=($m);?>" <?if($select_month==($m)) echo 'selected="selected"'?>><?=$month[$m-1];?></option>
  <? } ?>
 </select>
 
 &nbsp;&nbsp;

 ���:&nbsp;<select name="select_year" onchange="this.form.submit();" class="f11px">
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
<span class="f12px"><?=$n['LEAD']?> <!--<a href="/news/display/?nid=<?=$n['UID']?>" class="violet f11px">���������...</a></span>--><div style="clear:left"></div>
<?}?>
<?
/*
<form action="" method="post">
<table width="100%"><td height="40" valign="middle" style="border-top: 1px solid #CFCFCF" class="f12px">
<div>
 �����:&nbsp;<select name="select_month" onchange="this.form.submit();" class="f11px">
 <option value="0" >���...</option>
  <?  foreach($monthes as $m){ ?> 
  <option value="<?=($m);?>" <?if($select_month==($m)) echo 'selected="selected"'?>><?=$month[$m-1];?></option>
  <? } ?>
 </select>
 
 &nbsp;&nbsp;
 
 ���:&nbsp;<select name="select_year" onchange="this.form.submit();" class="f11px">
  <? foreach($years as $year){ ?>
  <option value="<?=$year;?>" <?if($select_year==($year)) echo 'selected="selected"'?> ><?=$year;?></option>
  <? } ?>
 </select>
</div>
</td>
<td height="40" valign="middle" style="border-top: 1px solid #CFCFCF" class="linkup" align="right">
<a href="#topBar">������</a>&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</table>
</form> 
*/ ?>
<hr />
<div class="linkup">
<a href="#topBar">������</a>&nbsp;&nbsp;&nbsp;&nbsp;</div>


