<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
现在想要做什么？<br><br>
<input type="hidden" name="mode" value="senditem">
<input type="hidden" id="command" name="command" value="back">
留言：<br><input size="30" type="text" name="message" maxlength="60"><br><br>
<input type="button" class="cmdbutton" name="back" value="返回" onclick="postCmd('gamecmd','command.php');"><br><br>
<? if($itms1) { ?>
转让：<input type="button" name="itm1" value="<?=$itm1?>/<?=$itme1?>/<?=$itms1?>" onclick="$('command').value='itm1';postCmd('gamecmd','command.php');"><br>
<? } if($itms2) { ?>
转让：<input type="button" name="itm2" value="<?=$itm2?>/<?=$itme2?>/<?=$itms2?>" onclick="$('command').value='itm2';postCmd('gamecmd','command.php');"><br>
<? } if($itms3) { ?>
转让：<input type="button" name="itm3" value="<?=$itm3?>/<?=$itme3?>/<?=$itms3?>" onclick="$('command').value='itm3';postCmd('gamecmd','command.php');"><br>
<? } if($itms4) { ?>
转让：<input type="button" name="itm4" value="<?=$itm4?>/<?=$itme4?>/<?=$itms4?>" onclick="$('command').value='itm4';postCmd('gamecmd','command.php');"><br>
<? } if($itms5) { ?>
转让：<input type="button" name="itm5" value="<?=$itm5?>/<?=$itme5?>/<?=$itms5?>" onclick="$('command').value='itm5';postCmd('gamecmd','command.php');"><br>
<? } if($itms6) { ?>
转让：<input type="button" name="itm6" value="<?=$itm6?>/<?=$itme6?>/<?=$itms6?>" onclick="$('command').value='itm6';postCmd('gamecmd','command.php');"><br>
<? } ?>
