<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
<input type="hidden" name="mode" value="item">
<input type="hidden" name="usemode" value="poison">
<input type="hidden" name="itmp" value="<?=$itmn?>">
<input type="hidden" id="command" name="command" value="menu">
你想对什么下毒？<br>
<br>
<? if((strpos ( $itmk1, 'H' ) === 0) || (strpos ( $itmk1, 'P' ) === 0)) { ?>
<input type="button" onclick="$('command').value='itm1';postCmd('gamecmd','command.php');this.disabled=true;" value="<?=$itm1?>/<?=$itme1?>/<?=$itms1?>"><br>
<? } if((strpos ( $itmk2, 'H' ) === 0) || (strpos ( $itmk2, 'P' ) === 0)) { ?>
<input type="button" onclick="$('command').value='itm2';postCmd('gamecmd','command.php');this.disabled=true;" value="<?=$itm2?>/<?=$itme2?>/<?=$itms2?>"><br>
<? } if((strpos ( $itmk3, 'H' ) === 0) || (strpos ( $itmk3, 'P' ) === 0)) { ?>
<input type="button" onclick="$('command').value='itm3';postCmd('gamecmd','command.php');this.disabled=true;" value="<?=$itm3?>/<?=$itme3?>/<?=$itms3?>"><br>
<? } if((strpos ( $itmk4, 'H' ) === 0) || (strpos ( $itmk4, 'P' ) === 0)) { ?>
<input type="button" onclick="$('command').value='itm4';postCmd('gamecmd','command.php');this.disabled=true;" value="<?=$itm4?>/<?=$itme4?>/<?=$itms4?>"><br>
<? } if((strpos ( $itmk5, 'H' ) === 0) || (strpos ( $itmk5, 'P' ) === 0)) { ?>
<input type="button" onclick="$('command').value='itm5';postCmd('gamecmd','command.php');this.disabled=true;" value="<?=$itm5?>/<?=$itme5?>/<?=$itms5?>"><br>
<? } if((strpos ( $itmk6, 'H' ) === 0) || (strpos ( $itmk6, 'P' ) === 0)) { ?>
<input type="button" onclick="$('command').value='itm6';postCmd('gamecmd','command.php');this.disabled=true;" value="<?=$itm6?>/<?=$itme6?>/<?=$itms6?>"><br>
<? } ?>
<br>
<input type="button" class="cmdbutton" onclick="postCmd('gamecmd','command.php');this.disabled=true;" value="放弃">