<? if(!defined('IN_GAME')) exit('Access Denied'); include template('header'); ?>
<span class="subtitle">幸存者一览</span>
<form method="post" name="backindex" onSubmit="return false;">
<input type="button" name="enter" value="显示前<?=$alivelimit?>名幸存者" onClick="showAlive('last');">
<input type="button" name="enter" value="显示全部幸存者" onClick="showAlive('all');">
</form>

<TABLE border="1"><tr align="center" class="b1"><td class="b1">名字&编号</td><td width="70" class="b1">头像</td><td class="b1">等级</td><td class="b1">杀害者数</td><td class="b1">队伍名</td><td width="300" class="b1">口头禅</td></tr>
<? if(is_array($alivedata)) { foreach($alivedata as $alive) { ?>
<tr class="b3"><td align="center" class="b3"><?=$alive['name']?><br><?=$sexinfo[$alive['gd']]?> <?=$alive['sNo']?> 号</td><td align="center" class="b3"><IMG src="img/<?=$alive['iconImg']?>" width="70" height="70" border="0" align="absmiddle"></td><td class="b3"><?=$alive['lvl']?></td><td class="b3"><?=$alive['killnum']?></td><td class="b3">
<? if($alive['teamID']) { ?>
<?=$alive['teamID']?>
<? } else { ?>
无
<? } ?>
</td><td class="b3"><?=$alive['motto']?></td></tr>
<? } } ?>
</table><BR>
【生存者数：<?=$alivenum?>人】</table><BR><BR>

<br>
<form method="post" name="backindex" action="index.php">
<input type="submit" name="enter" value="返回首页">
</form>
<? include template('footer'); ?>
