<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
现在想要做什么？<br><br>
向对手大喊：<br><input size="30" type="text" name="message" maxlength="60"><br><br>
<input type="hidden" name="mode" value="combat">
<input type="hidden" id="command" name="command" value="back">
<input type="button" class="cmdbutton" style="width:100" name="w1" value="<?=$attinfo[$w1]?>" onclick="$('command').value='<?=$w1?>';postCmd('gamecmd','command.php');this.disabled=true;"><br>
<? if($w2) { ?>
<input type="button" class="cmdbutton" style="width:100" name="w2" value="<?=$attinfo[$w2]?>" onclick="$('command').value='<?=$w2?>';postCmd('gamecmd','command.php');this.disabled=true;"><br>
<? } ?>
<br><input type="button" class="cmdbutton" name="back" value="逃跑" onclick="postCmd('gamecmd','command.php');this.disabled=true;"> 