<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
<?=$restinfo[$state]?> 中。。。<br>
<input type="hidden" id="mode" name="mode" value="rest">
<input type="hidden" id="command" name="command" value="rest">
<input type="button" class="cmdbutton" name="rest" value="<?=$restinfo[$state]?>" onclick="postCmd('gamecmd','command.php');this.disabled=true;">
<input type="button" class="cmdbutton" name="back" value="返回" onclick="$('command').value='back';postCmd('gamecmd','command.php');this.disabled=true;">