<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
你想要合成什么？<br>

<input type="hidden" name="mode" value="itemmain">
<input type="radio" name="command" id="menu" value="menu" checked><a onclick=sl('menu'); href="javascript:void(0);" >返回</a><br><br>
<input type="radio" name="command" id="itemmix" value="itemmix"><a onclick=sl('itemmix'); href="javascript:void(0);">合成</a>
<br>
<select name="mix1" onclick=sl('itemmix'); href="javascript:void(0);">
<option value="0">■ 道具一 ■<br />
<? if($itms1) { ?>
<option value="1"><?=$itm1?>/<?=$itme1?>/<?=$itms1?><br />
<? } if($itms2) { ?>
<option value="2"><?=$itm2?>/<?=$itme2?>/<?=$itms2?><br />
<? } if($itms3) { ?>
<option value="3"><?=$itm3?>/<?=$itme3?>/<?=$itms3?><br />
<? } if($itms4) { ?>
<option value="4"><?=$itm4?>/<?=$itme4?>/<?=$itms4?><br />
<? } if($itms5) { ?>
<option value="5"><?=$itm5?>/<?=$itme5?>/<?=$itms5?><br />
<? } ?>
</select>
<br>
<br>
<select name="mix2" onclick=sl('itemmix'); href="javascript:void(0);">
<option value="0">■ 道具二 ■<br />
<? if($itms1) { ?>
<option value="1"><?=$itm1?>/<?=$itme1?>/<?=$itms1?><br />
<? } if($itms2) { ?>
<option value="2"><?=$itm2?>/<?=$itme2?>/<?=$itms2?><br />
<? } if($itms3) { ?>
<option value="3"><?=$itm3?>/<?=$itme3?>/<?=$itms3?><br />
<? } if($itms4) { ?>
<option value="4"><?=$itm4?>/<?=$itme4?>/<?=$itms4?><br />
<? } if($itms5) { ?>
<option value="5"><?=$itm5?>/<?=$itme5?>/<?=$itms5?><br />
<? } ?>
</select>
<br>
<br>
<select name="mix3" onclick=sl('itemmix'); href="javascript:void(0);">
<option value="0">■ 道具三 ■<br />
<? if($itms1) { ?>
<option value="1"><?=$itm1?>/<?=$itme1?>/<?=$itms1?><br />
<? } if($itms2) { ?>
<option value="2"><?=$itm2?>/<?=$itme2?>/<?=$itms2?><br />
<? } if($itms3) { ?>
<option value="3"><?=$itm3?>/<?=$itme3?>/<?=$itms3?><br />
<? } if($itms4) { ?>
<option value="4"><?=$itm4?>/<?=$itme4?>/<?=$itms4?><br />
<? } if($itms5) { ?>
<option value="5"><?=$itm5?>/<?=$itme5?>/<?=$itms5?><br />
<? } ?>
</select>
