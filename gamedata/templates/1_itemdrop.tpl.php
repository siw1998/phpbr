<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
你想丢掉什么？<br><br>
<input type="hidden" name="mode" value="itemmain">
<input type="radio" name="command" id="menu" value="menu" checked><a onclick=sl('menu'); href="javascript:void(0);" >返回</a><br><br>
<? if($weps && $wepe) { ?>
<input type="radio" name="command" id="wep" value="dropwep"><a onclick=sl('wep'); href="javascript:void(0);" ><?=$wep?>/<?=$wepe?>/<?=$weps?> </a><br>
<? } if($arbs && $arbe) { ?>
<input type="radio" name="command" id="arb" value="droparb"><a onclick=sl('arb'); href="javascript:void(0);" ><?=$arb?>/<?=$arbe?>/<?=$arbs?> </a><br>
<? } if($arhs) { ?>
<input type="radio" name="command" id="arh" value="droparh"><a onclick=sl('arh'); href="javascript:void(0);" ><?=$arh?>/<?=$arhe?>/<?=$arhs?> </a><br>
<? } if($aras) { ?>
<input type="radio" name="command" id="ara" value="dropara"><a onclick=sl('ara'); href="javascript:void(0);" ><?=$ara?>/<?=$arae?>/<?=$aras?> </a><br>
<? } if($arfs) { ?>
<input type="radio" name="command" id="arf" value="droparf"><a onclick=sl('arf'); href="javascript:void(0);" ><?=$arf?>/<?=$arfe?>/<?=$arfs?> </a><br>
<? } if($arts) { ?>
<input type="radio" name="command" id="art" value="dropart"><a onclick=sl('art'); href="javascript:void(0);" ><?=$art?>/<?=$arte?>/<?=$arts?> </a><br>
<? } if($itms1) { ?>
<input type="radio" name="command" id="itm1" value="dropitm1"><a onclick=sl('itm1'); href="javascript:void(0);" ><?=$itm1?>/<?=$itme1?>/<?=$itms1?> </a><br>
<? } if($itms2) { ?>
<input type="radio" name="command" id="itm2" value="dropitm2"><a onclick=sl('itm2'); href="javascript:void(0);" ><?=$itm2?>/<?=$itme2?>/<?=$itms2?> </a><br>
<? } if($itms3) { ?>
<input type="radio" name="command" id="itm3" value="dropitm3"><a onclick=sl('itm3'); href="javascript:void(0);" ><?=$itm3?>/<?=$itme3?>/<?=$itms3?> </a><br>
<? } if($itms4) { ?>
<input type="radio" name="command" id="itm4" value="dropitm4"><a onclick=sl('itm4'); href="javascript:void(0);" ><?=$itm4?>/<?=$itme4?>/<?=$itms4?> </a><br>
<? } if($itms5) { ?>
<input type="radio" name="command" id="itm5" value="dropitm5"><a onclick=sl('itm5'); href="javascript:void(0);" ><?=$itm5?>/<?=$itme5?>/<?=$itms5?> </a><br>
<? } if($itms6) { ?>
<input type="radio" name="command" id="itm6" value="dropitm6"><a onclick=sl('itm6'); href="javascript:void(0);" ><?=$itm6?>/<?=$itme6?>/<?=$itms6?> </a><br>
<? } ?>
<br><br>
<input type="button" class="cmdbutton" name="submit" value="确定并丢弃" onclick="postCmd('gamecmd','command.php');this.disabled=true;">