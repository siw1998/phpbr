<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
你想要合成什么？<br>

<input type="hidden" name="mode" value="itemmain">
<input type="hidden" name="command" id="command" value="menu">
<br>
<? if($itms1) { ?>
<input type="checkbox" id="mitm1" name="mitm1" value="0"><a onclick="$('mitm1').click();" href="javascript:void(0);"><?=$itm1?>/<?=$itme1?>/<?=$itms1?></a><br>
<? } if($itms2) { ?>
<input type="checkbox" id="mitm2" name="mitm2" value="0"><a onclick="$('mitm2').click();" href="javascript:void(0);"><?=$itm2?>/<?=$itme2?>/<?=$itms2?></a><br>
<? } if($itms3) { ?>
<input type="checkbox" id="mitm3" name="mitm3" value="0"><a onclick="$('mitm3').click();" href="javascript:void(0);"><?=$itm3?>/<?=$itme3?>/<?=$itms3?></a><br>
<? } if($itms4) { ?>
<input type="checkbox" id="mitm4" name="mitm4" value="0"><a onclick="$('mitm4').click();" href="javascript:void(0);"><?=$itm4?>/<?=$itme4?>/<?=$itms4?></a><br>
<? } if($itms5) { ?>
<input type="checkbox" id="mitm5" name="mitm5" value="0"><a onclick="$('mitm5').click();" href="javascript:void(0);"><?=$itm5?>/<?=$itme5?>/<?=$itms5?></a><br>
<? } if($itms6) { ?>
<input type="checkbox" id="mitm6" name="mitm6" value="0"><a onclick="$('mitm6').click();" href="javascript:void(0);"><?=$itm6?>/<?=$itme6?>/<?=$itms6?></a><br>
<? } ?>
<br>
<input type="button" class="cmdbutton" name="submit" value="提交" onclick="$('command').value='itemmix';itemmixchooser();postCmd('gamecmd','command.php');this.disabled=true;">
<input type="button" class="cmdbutton" name="submit" value="放弃" onclick="postCmd('gamecmd','command.php');this.disabled=true;">