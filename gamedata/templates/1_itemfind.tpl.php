<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
发现了物品 <span class="yellow"><?=$itm0?></span>，类型：<?=$itmk0_words?>
<? if(($itmsk0) && !is_numeric($itmsk0)) { ?>
，属性：<?=$itmsk0_words?>
<? } ?>
，效：<?=$itme0?>，耐：<?=$itms0?>。
<br>
<br>
你想如何处理？
<br>
<input type="hidden" id="mode" name="mode" value="itemmain">
<input type="hidden" id="command" name="command" value="itemget">
<input type="button" class="cmdbutton" name="itemget" value="拾取" onclick="postCmd('gamecmd','command.php');this.disabled=true;"><br><br>
<input type="button" class="cmdbutton" name="dropitm0" value="丢弃" onclick="$('command').value='dropitm0';postCmd('gamecmd','command.php');this.disabled=true;">