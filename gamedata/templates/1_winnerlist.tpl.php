<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
<br>
<form method="post" name="info" onsubmit="winner.php">
<input type="hidden" name="command" value="info">
<input type="button" value="查看选择角色的详细信息" onclick="javascript:document.info.command.value='info';document.info.submit();">
<input type="button" value="查看选择回数的进行状况" onclick="javascript:document.info.command.value='news';document.info.submit();">
<TABLE border="1" cellspacing="0" cellpadding="0">
<TR height="20"><TD class="b1">&nbsp;</TD><TD class="b1">回</TD><TD class="b1">优胜者名</TD><TD class="b1">胜利方式</TD><TD class="b1">游戏结束时间</TD><TD class="b1">胜利者留言</TD><TD class="b1">使用武器</TD></TR>
<? if(is_array($winfo)) { foreach($winfo as $info) { if($info['wmode'] && $info['wmode'] != 4) { ?>
<TR height="20">
<TD class="b2"><INPUT type="radio" name="gnum" value="<?=$info['gid']?>" ></TD>
<TD class="b2"><?=$info['gid']?></TD>
<TD class="b2" style="white-space: nowrap;">
<? if($info['name']) { ?>
<?=$info['name']?>
<? } else { ?>
无
<? } ?>
</TD>
<TD class="b2"><?=$gwin[$info['wmode']]?></TD>
<TD class="b2"><?=$info['date']?></TD>
<TD class="b2">
<? if($info['motto']) { ?>
<?=$info['motto']?>
<? } else { ?>
无
<? } ?>
</TD>
<TD class="b2">
<? if($info['wep']) { ?>
<?=$info['wep']?>
<? } else { ?>
无
<? } ?>
</TD>
</TR>
<? } else { ?>
<TR height="20">
<TD class="b2"></TD>
<TD class="b2"><?=$info['gid']?></TD>
<TD class="b2" style="white-space: nowrap;">无</TD>
<TD class="b2"><?=$gwin[$info['wmode']]?></TD>
<TD class="b2"><?=$info['date']?></TD>
<TD class="b2">无</TD>
<TD class="b2">无</TD>
</TR>
<? } } } ?>
</TABLE>
<input type="button" value="查看选择角色的详细信息" onclick="javascript:document.info.command.value='info';document.info.submit();">
<input type="button" value="查看选择回数的进行状况" onclick="javascript:document.info.command.value='news';document.info.submit();">
</form>

<form method="post" name="list" action="winner.php">
<input type="hidden" name="command" value="list">
<input type="hidden" name="start" value="<?=$gamenum?>">
<input style='width: 120px;' type="button" value="最近 <?=$winlimit?> 回" onClick="document['list'].submit();">

<br>
<?=$listinfo?>
</form>
