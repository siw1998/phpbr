<? if(!defined('IN_GAME')) exit('Access Denied'); if($urcmd == 'list') { ?>
<form method="post" name="urpage" onsubmit="admin.php">
<input type="hidden" name="mode" value="urlist">
<input type="hidden" id="urcmd" name="urcmd" value="list">
<? if($pagecmd=='check') { ?>
<input type="hidden" name="pagecmd" value="check">
<input type="hidden" name="urorder" value="<?=$urorder?>">
<input type="hidden" name="urorder2" value="<?=$urorder2?>">
<? } elseif($pagecmd=='find') { ?>
<input type="hidden" name="pagecmd" value="find">
<input type="hidden" name="checkinfo" value="<?=$checkinfo?>">
<input type="hidden" name="checkmode" value="<?=$checkmode?>">
<? } ?>
<input type="hidden" name="start" value="<?=$start?>">
<input type="hidden" id="pagemode" name="pagemode" value="">
<input type="submit" value="上一页" onclick="$('pagemode').value='up';">
<span class="yellow"><?=$resultinfo?></span>
<input type="submit" value="下一页" onclick="$('pagemode').value='down';">
<? if($urdata) { ?>
<table class="admin">
<tr>
<th>选</th>
<th>账号</th>
<th>密码</th>
<th>权限</th>
<th>最新游戏</th>
<th>ip</th>
<th>分数</th>
<th>性别</th>
<th>头像</th>
<th>社团</th>
<th>口头禅</th>
<th>杀人留言</th>
<th>遗言</th>
<th>操作</th>
</tr>
<? if($urdata) { if(is_array($urdata)) { foreach($urdata as $n => $ur) { ?>
<tr>
<? if($ur['groupid']>=$mygroup) { ?>
<td><input type="checkbox" id="user_<?=$n?>" name="user_<?=$n?>" value="<?=$ur['uid']?>" disabled="true"></td>
<td><?=$ur['username']?></td>
<td><input type="text" name="pass_<?=$n?>" size="20" maxlength="20" value="无法修改" disabled="true"></td>
<td><?=$urgroup[$ur['groupid']]?></td>
<td>第<?=$ur['lastgame']?>局</td>
<td><?=$ur['ip']?></td>
<td><?=$ur['credits']?></td>
<td>
<select name="gender_<?=$n?>" disabled="true">
<option value="0" 
<? if($ur['gender']==0) { ?>
selected
<? } ?>
><?=$ursex['0']?>
<option value="m" 
<? if($ur['gender']=='m') { ?>
selected
<? } ?>
><?=$ursex['m']?>
<option value="f" 
<? if($ur['gender']=='f') { ?>
selected
<? } ?>
><?=$ursex['f']?>
</select>
</td>
<td><input type="text" name="icon_<?=$n?>" size="2" maxlength="2" value="<?=$ur['icon']?>" disabled="true"></td>
<td><?=$clubinfo[$ur['club']]?></td>
<td><input type="text" name="motto_<?=$n?>" size="20" maxlength="20" value="<?=$ur['motto']?>" disabled="true"></td>
<td><input type="text" name="killmsg_<?=$n?>" size="20" maxlength="20" value="<?=$ur['killmsg']?>" disabled="true"></td>
<td><input type="text" name="lastword_<?=$n?>" size="20" maxlength="20" value="<?=$ur['lastword']?>" disabled="true"></td>
<td>
<input type="submit" value="修改" disabled="true">
</td>
<? } else { ?>
<td><input type="checkbox" id="user_<?=$n?>"  name="user_<?=$n?>" value="<?=$ur['uid']?>"></td>
<td><?=$ur['username']?></td>
<td><input type="text" name="pass_<?=$n?>" size="20" maxlength="20" value=""></td>
<td><?=$urgroup[$ur['groupid']]?></td>
<td>第<?=$ur['lastgame']?>局</td>
<td><?=$ur['ip']?></td>
<td><?=$ur['credits']?></td>
<td>
<select name="gender_<?=$n?>">
<option value="0" 
<? if($ur['gender']==0) { ?>
selected
<? } ?>
><?=$ursex['0']?>
<option value="m" 
<? if($ur['gender']=='m') { ?>
selected
<? } ?>
><?=$ursex['m']?>
<option value="f" 
<? if($ur['gender']=='f') { ?>
selected
<? } ?>
><?=$ursex['f']?>
</select>
</td>
<td><input type="text" name="icon_<?=$n?>" size="2" maxlength="2" value="<?=$ur['icon']?>"></td>
<td><?=$clubinfo[$ur['club']]?></td>
<td><input type="text" name="motto_<?=$n?>" size="20" maxlength="60" value="<?=$ur['motto']?>"></td>
<td><input type="text" name="killmsg_<?=$n?>" size="20" maxlength="60" value="<?=$ur['killmsg']?>"></td>
<td><input type="text" name="lastword_<?=$n?>" size="20" maxlength="60" value="<?=$ur['lastword']?>"></td>
<td>
<input type="submit" value="修改" onclick="$('urcmd').value='edit_<?=$n?>_<?=$ur['uid']?>'">
</td>
<? } ?>
</tr>
<? } } ?>
<tr>
<td colspan=2><input type="checkbox" name="user_all" onchange="for(i=0; i<=<?=$n?>;i++){if(! $('user_'+i).disabled){if(this.checked==true){$('user_'+i).checked=true}else{$('user_'+i).checked=false}}}">全选</td>
<td colspan=12 style="text-align:center;">
<input type="submit" name="submit" value="封停选中玩家" onclick="$('urcmd').value='ban'">
<input type="submit" name="submit" value="解封选中玩家" onclick="$('urcmd').value='unban'">
<input type="submit" name="submit" value="删除选中玩家" onclick="$('urcmd').value='del'">
</td>
</tr>
<? } ?>
</table>
<? } ?>
</form>
<form method="post" name="backtolist" onsubmit="admin.php">
<input type="hidden" name="mode" value="urlist">
<input type="hidden" name="command" value="">
<input type="submit" name="submit" value="返回玩家帐户管理">
</form>
<? } else { ?>
<form method="post" name="urlist" onsubmit="admin.php">
<input type="hidden" name="mode" value="urlist">
<input type="hidden" name="pagecmd" id="pagecmd" value="">
<input type="hidden" name="urcmd" value="list">
<table class="admin">
<tr>
<th>搜索指定帐户</th>
<th>查看帐户列表</th>
</tr>
<tr>
<td>
条件：
<select name="checkmode">
<option value="username" selected>用户名
<option value="ip">用户IP
</select>
类似
<input size="30" type="text" name="checkinfo" id="checkinfo" maxlength="30" />
</td>
<td>
按：
<select name="urorder">
<option value="groupid" selected>用户所属组
<option value="lastgame">最新游戏
<option value="uid">用户编号
</select>
<select name="urorder2">
<option value="DESC" selected>降序排列
<option value="ASC">升序排列
</select>
</td>
</tr>
<tr>
<td style="text-align:center;"><input style="width:100px;height:30px;" type="submit" value="搜索" onclick="$('pagecmd').value='find';"></td>
<td style="text-align:center;"><input style="width:100px;height:30px;" type="submit" value="查看" onclick="$('pagecmd').value='check';"></td>
</tr>
</table>

</form>
<? } ?>
