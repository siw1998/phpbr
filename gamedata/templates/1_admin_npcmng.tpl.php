<? if(!defined('IN_GAME')) exit('Access Denied'); if($command=='check') { ?>
<form method="post" name="npcmng" onsubmit="admin.php">
<input type="hidden" name="mode" value="npcmng">
<input type="hidden" id="command" name="command" value="list">
<input type="hidden" name="start" value="<?=$start?>">
<input type="hidden" name="checkmode" value="<?=$checkmode?>">	
<input type="hidden" name="checkinfo" value="<?=$checkinfo?>">
<input type="hidden" name="name" value="<?=$npc['name']?>">
<input type="hidden" name="pid" value="<?=$npc['pid']?>">

<input type="hidden" name="itm0" value="<?=$npc['itm0']?>">
<input type="hidden" name="itme0" value="<?=$npc['itme0']?>">
<input type="hidden" name="itmk0" value="<?=$npc['itmk0']?>">
<input type="hidden" name="itms0" value="<?=$npc['itms0']?>">
<input type="hidden" name="itmsk0" value="<?=$npc['itmsk0']?>">
<table class="admin">
<tr>		
<th>属性名</th>
<th>属性值</th>
<th>装备属性</th>
<th>装备数值</th>
<th>包裹属性</th>
<th>包裹数值</th>
</tr>
<tr>		
<td>姓名</td>
<td><?=$npc['name']?></td>
<td>武器</td>
<td><input size="20" type="text" name="wep" value="<?=$npc['wep']?>" maxlength="30"></td>
<td>包裹1</td>
<td><input size="20" type="text" name="itm1" value="<?=$npc['itm1']?>" maxlength="30"></td>
</tr>
<tr>		
<td>性别</td>
<td><input size="20" type="text" name="gd" value="<?=$npc['gd']?>" maxlength="20"></td>
<td>类型</td>
<td><input size="20" type="text" name="wepk" value="<?=$npc['wepk']?>" maxlength="20"></td>
<td>类型</td>
<td><input size="20" type="text" name="itmk1" value="<?=$npc['itmk1']?>" maxlength="20"></td>
</tr>
<tr>
<td>学号</td>
<td><input size="20" type="text" name="sNo" value="<?=$npc['sNo']?>" maxlength="20"></td>
<td>效果</td>
<td><input size="20" type="text" name="wepe" value="<?=$npc['wepe']?>" maxlength="20"></td>
<td>效果</td>
<td><input size="20" type="text" name="itme1" value="<?=$npc['itme1']?>" maxlength="20"></td>
</tr>
<tr>
<td>头像</td>
<td><input size="20" type="text" name="icon" value="<?=$npc['icon']?>" maxlength="20"></td>
<td>耐久</td>
<td><input size="20" type="text" name="weps" value="<?=$npc['weps']?>" maxlength="20"></td>
<td>耐久</td>
<td><input size="20" type="text" name="itms1" value="<?=$npc['itms1']?>" maxlength="20"></td>
</tr>
<tr>
<td>社团</td>
<td><input size="20" type="text" name="club" value="<?=$npc['club']?>" maxlength="20"></td>
<td>子类型</td>
<td><input size="20" type="text" name="wepsk" value="<?=$npc['wepsk']?>" maxlength="20"></td>
<td>子类型</td>
<td><input size="20" type="text" name="itmsk1" value="<?=$npc['itmsk1']?>" maxlength="20"></td>
</tr>
<tr>
<td>生命</td>
<td><input size="20" type="text" name="hp" value="<?=$npc['hp']?>" maxlength="20"></td>
<td>防具(体)</td>
<td><input size="20" type="text" name="arb" value="<?=$npc['arb']?>" maxlength="30"></td>
<td>包裹2</td>
<td><input size="20" type="text" name="itm2" value="<?=$npc['itm2']?>" maxlength="30"></td>
</tr>
<tr>
<td>最大生命</td>
<td><input size="20" type="text" name="mhp" value="<?=$npc['mhp']?>" maxlength="20"></td>
<td>类型</td>
<td><input size="20" type="text" name="arbk" value="<?=$npc['arbk']?>" maxlength="20"></td>
<td>类型</td>
<td><input size="20" type="text" name="itmk2" value="<?=$npc['itmk2']?>" maxlength="20"></td>
</tr>
<tr>
<td>体力</td>
<td><input size="20" type="text" name="sp" value="<?=$npc['sp']?>" maxlength="20"></td>
<td>效果</td>
<td><input size="20" type="text" name="arbe" value="<?=$npc['arbe']?>" maxlength="20"></td>
<td>效果</td>
<td><input size="20" type="text" name="itme2" value="<?=$npc['itme2']?>" maxlength="20"></td>
</tr>
<tr>
<td>最大体力</td>
<td><input size="20" type="text" name="msp" value="<?=$npc['msp']?>" maxlength="20"></td>
<td>耐久</td>
<td><input size="20" type="text" name="arbs" value="<?=$npc['arbs']?>" maxlength="20"></td>
<td>耐久</td>
<td><input size="20" type="text" name="itms2" value="<?=$npc['itms2']?>" maxlength="20"></td>
</tr>
<tr>
<td>基础攻击</td>
<td><input size="20" type="text" name="att" value="<?=$npc['att']?>" maxlength="20"></td>
<td>子类型</td>
<td><input size="20" type="text" name="arbsk" value="<?=$npc['arbsk']?>" maxlength="20"></td>
<td>子类型</td>
<td><input size="20" type="text" name="itmsk2" value="<?=$npc['itmsk2']?>" maxlength="20"></td>
</tr>
<tr>
<td>基础防御</td>
<td><input size="20" type="text" name="def" value="<?=$npc['def']?>" maxlength="20"></td>
<td>防具(头)</td>
<td><input size="20" type="text" name="arh" value="<?=$npc['arh']?>" maxlength="30"></td>
<td>包裹3</td>
<td><input size="20" type="text" name="itm3" value="<?=$npc['itm3']?>" maxlength="30"></td>
</tr>
<tr>
<td>位置</td>
<td><input size="20" type="text" name="pls" value="<?=$npc['pls']?>" maxlength="20"></td>
<td>类型</td>
<td><input size="20" type="text" name="arhk" value="<?=$npc['arhk']?>" maxlength="20"></td>
<td>类型</td>
<td><input size="20" type="text" name="itmk3" value="<?=$npc['itmk3']?>" maxlength="20"></td>
</tr>
<tr>
<td>等级</td>
<td><input size="20" type="text" name="lvl" value="<?=$npc['lvl']?>" maxlength="20"></td>
<td>效果</td>
<td><input size="20" type="text" name="arhe" value="<?=$npc['arhe']?>" maxlength="20"></td>
<td>效果</td>
<td><input size="20" type="text" name="itme3" value="<?=$npc['itme3']?>" maxlength="20"></td>
</tr>
<tr>
<td>经验</td>
<td><input size="20" type="text" name="exp" value="<?=$npc['exp']?>" maxlength="20"></td>
<td>耐久</td>
<td><input size="20" type="text" name="arhs" value="<?=$npc['arhs']?>" maxlength="20"></td>
<td>耐久</td>
<td><input size="20" type="text" name="itms3" value="<?=$npc['itms3']?>" maxlength="20"></td>
</tr>
<tr>
<td>钱</td>
<td><input size="20" type="text" name="money" value="<?=$npc['money']?>" maxlength="20"></td>
<td>子类型</td>
<td><input size="20" type="text" name="arhsk" value="<?=$npc['arhsk']?>" maxlength="20"></td>
<td>子类型</td>
<td><input size="20" type="text" name="itmsk3" value="<?=$npc['itmsk3']?>" maxlength="20"></td>
</tr>
<tr>
<td>对手</td>
<td><input size="20" type="text" name="bid" value="<?=$npc['bid']?>" maxlength="20"></td>
<td>防具(腕)</td>
<td><input size="20" type="text" name="ara" value="<?=$npc['ara']?>" maxlength="30"></td>
<td>包裹4</td>
<td><input size="20" type="text" name="itm4" value="<?=$npc['itm4']?>" maxlength="30"></td>
</tr>
<tr>
<td>受伤</td>
<td><input size="20" type="text" name="inf" value="<?=$npc['inf']?>" maxlength="20"></td>
<td>类型</td>
<td><input size="20" type="text" name="arak" value="<?=$npc['arak']?>" maxlength="20"></td>
<td>类型</td>
<td><input size="20" type="text" name="itmk4" value="<?=$npc['itmk4']?>" maxlength="20"></td>
</tr>
<tr>
<td>怒气</td>
<td><input size="20" type="text" name="rage" value="<?=$npc['rage']?>" maxlength="20"></td>
<td>效果</td>
<td><input size="20" type="text" name="arae" value="<?=$npc['arae']?>" maxlength="20"></td>
<td>效果</td>
<td><input size="20" type="text" name="itme4" value="<?=$npc['itme4']?>" maxlength="20"></td>
</tr>
<tr>
<td>基础姿态</td>
<td><input size="20" type="text" name="pose" value="<?=$npc['pose']?>" maxlength="20"></td>
<td>耐久</td>
<td><input size="20" type="text" name="aras" value="<?=$npc['aras']?>" maxlength="20"></td>
<td>耐久</td>
<td><input size="20" type="text" name="itms4" value="<?=$npc['itms4']?>" maxlength="20"></td>
</tr>
<tr>
<td>应战策略</td>
<td><input size="20" type="text" name="tactic" value="<?=$npc['tactic']?>" maxlength="20"></td>
<td>子类型</td>
<td><input size="20" type="text" name="arask" value="<?=$npc['arask']?>" maxlength="20"></td>
<td>子类型</td>
<td><input size="20" type="text" name="itmsk4" value="<?=$npc['itmsk4']?>" maxlength="20"></td>
</tr>
<tr>
<td>杀人数</td>
<td><input size="20" type="text" name="killnum" value="<?=$npc['killnum']?>" maxlength="20"></td>
<td>防具(足)</td>
<td><input size="20" type="text" name="arf" value="<?=$npc['arf']?>" maxlength="30"></td>
<td>包裹5</td>
<td><input size="20" type="text" name="itm5" value="<?=$npc['itm5']?>" maxlength="30"></td>
</tr>
<tr>
<td>殴熟</td>
<td><input size="20" type="text" name="wp" value="<?=$npc['wp']?>" maxlength="20"></td>
<td>类型</td>
<td><input size="20" type="text" name="arfk" value="<?=$npc['arfk']?>" maxlength="20"></td>
<td>类型</td>
<td><input size="20" type="text" name="itmk5" value="<?=$npc['itmk5']?>" maxlength="20"></td>
</tr>
<tr>
<td>斩熟</td>
<td><input size="20" type="text" name="wk" value="<?=$npc['wk']?>" maxlength="20"></td>
<td>效果</td>
<td><input size="20" type="text" name="arfe" value="<?=$npc['arfe']?>" maxlength="20"></td>
<td>效果</td>
<td><input size="20" type="text" name="itme5" value="<?=$npc['itme5']?>" maxlength="20"></td>
</tr>
<tr>
<td>枪熟</td>
<td><input size="20" type="text" name="wg" value="<?=$npc['wg']?>" maxlength="20"></td>
<td>耐久</td>
<td><input size="20" type="text" name="arfs" value="<?=$npc['arfs']?>" maxlength="20"></td>
<td>耐久</td>
<td><input size="20" type="text" name="itms5" value="<?=$npc['itms5']?>" maxlength="20"></td>
</tr>
<tr>
<td>投熟</td>
<td><input size="20" type="text" name="wc" value="<?=$npc['wc']?>" maxlength="20"></td>
<td>子类型</td>
<td><input size="20" type="text" name="arfsk" value="<?=$npc['arfsk']?>" maxlength="20"></td>
<td>子类型</td>
<td><input size="20" type="text" name="itmsk5" value="<?=$npc['itmsk5']?>" maxlength="20"></td>
</tr>
<tr>
<td>爆熟</td>
<td><input size="20" type="text" name="wd" value="<?=$npc['wd']?>" maxlength="20"></td>
<td>饰品</td>
<td><input size="20" type="text" name="art" value="<?=$npc['art']?>" maxlength="30"></td>
<td>包裹6</td>
<td><input size="20" type="text" name="itm6" value="<?=$npc['itm6']?>" maxlength="30"></td>
</tr>
<tr>
<td>灵熟</td>
<td><input size="20" type="text" name="wf" value="<?=$npc['wf']?>" maxlength="20"></td>
<td>类型</td>
<td><input size="20" type="text" name="artk" value="<?=$npc['artk']?>" maxlength="20"></td>
<td>类型</td>
<td><input size="20" type="text" name="itmk6" value="<?=$npc['itmk6']?>" maxlength="20"></td>
</tr>
<tr>
<td>队伍名称</td>
<td><input size="20" type="text" name="teamID" value="<?=$npc['teamID']?>" maxlength="20"></td>
<td>效果</td>
<td><input size="20" type="text" name="arte" value="<?=$npc['arte']?>" maxlength="20"></td>
<td>效果</td>
<td><input size="20" type="text" name="itme6" value="<?=$npc['itme6']?>" maxlength="20"></td>
</tr>
<tr>
<td>队伍密码</td>
<td><input size="20" type="text" name="teamPass" value="<?=$npc['teamPass']?>" maxlength="20"></td>
<td>耐久</td>
<td><input size="20" type="text" name="arts" value="<?=$npc['arts']?>" maxlength="20"></td>
<td>耐久</td>
<td><input size="20" type="text" name="itms6" value="<?=$npc['itms6']?>" maxlength="20"></td>
</tr>
<tr>
<td></td>
<td></td>
<td>子类型</td>
<td><input size="20" type="text" name="artsk" value="<?=$npc['artsk']?>" maxlength="20"></td>
<td>子类型</td>
<td><input size="20" type="text" name="itmsk6" value="<?=$npc['itmsk6']?>" maxlength="20"></td>
</tr>
</table>
<input type="submit" value="修改NPC数值" onclick="$('command').value = 'submitedit'">
</form> 
<form method="post" name="npcmng" onsubmit="admin.php">
<input type="hidden" name="mode" value="npcmng">
<input type="hidden" name="command" value="list">
<input type="submit" value="返回NPC管理">
</form>
<? } else { ?>
<form method="post" name="npcmng" onsubmit="admin.php">
<input type="hidden" name="mode" value="npcmng">
<input type="hidden" id="command" name="command" value="find">
<input type="hidden" name="start" value="<?=$start?>">
<input type="hidden" name="pagemode" value="">
<table class="admin">
<tr>
<th colspan=2>查找NPC</th>
</tr>
<tr>
<td>条件：
<select name="checkmode">
<option value="name" 
<? if($checkmode == 'name') { ?>
selected
<? } ?>
>NPC名
<option value="teamID" 
<? if($checkmode == 'teamID') { ?>
selected
<? } ?>
>队伍名称
<option value="pls" 
<? if($checkmode == 'pls') { ?>
selected
<? } ?>
>地点
</select>类似
</td>
<td>
<input size="30" type="text" name="checkinfo" id="checkinfo" value="<?=$checkinfo?>" maxlength="30"><input type="submit" value="查找NPC" onclick="javascript:document.npcmng.pagemode.value='ref'">
</td>
</tr>
</table>
<br>
<input type="submit" value="上一页" onclick="javascript:document.npcmng.pagemode.value='up';">
<span class="yellow"><?=$resultinfo?></span>
<input type="submit" value="下一页" onclick="javascript:document.npcmng.pagemode.value='down';">
<table class="admin">
<tr>
<th>选</th>
<th>姓名</th>
<th>性别</th>
<th>学号</th>
<th>等级</th>
<th>位置</th>
<th>队伍</th>
<th>状态</th>
<th>体力</th>
<th>生命</th>
<th>社团</th>
<th>金钱</th>
<th>熟练</th>
<th>武器</th>
<th>操作</th>
</tr>
<? if(isset($npcdata)) { if(is_array($npcdata)) { foreach($npcdata as $n => $npc) { ?>
<tr>
<td><input type="checkbox" id="npc_<?=$n?>" name="npc_<?=$n?>" value="<?=$npc['pid']?>"></td>
<td><span 
<? if($npc['hp']<=0 || $npc['state']>=10) { ?>
class="red"
<? } ?>
><?=$npc['name']?></span></td>
<td><?=$sexinfo[$npc['gd']]?></td>
<td><?=$npc['sNo']?></td>
<td><?=$npc['lvl']?></td>
<td><?=$plsinfo[$npc['pls']]?></td>
<td><?=$npc['teamID']?></td>
<td><span 
<? if($npc['state']>=10) { ?>
class="red"
<? } ?>
><?=$stateinfo[$npc['state']]?></span></td>
<td><?=$npc['sp']?>/<?=$npc['msp']?></td>
<td><?=$npc['hp']?>/<?=$npc['mhp']?></td>
<td><?=$clubinfo[$npc['club']]?></td>
<td><?=$npc['money']?></td>
<td><?=$npc['wp']?>/<?=$npc['wk']?>/<?=$npc['wg']?>/<?=$npc['wc']?>/<?=$npc['wd']?>/<?=$npc['wf']?></td>
<td><?=$npc['wep']?>/<?=$npc['wepe']?>/<?=$npc['weps']?></td>
<td><input type="submit" value="查看/修改详细资料" onclick="$('command').value='edit_<?=$n?>_<?=$npc['pid']?>'"></td>
</tr>
<? } } ?>
<tr>
<td colspan="2">
<input type="checkbox" name="npc_all" onchange="for(i=0; i<=<?=$n?>;i++){if(! $('npc_'+i).disabled){if(this.checked==true){$('npc_'+i).checked=true}else{$('npc_'+i).checked=false}}}">全选
</td>
<td colspan="13" style="text-align:center">
<input type="submit" value="复活所选NPC" onclick="$('command').value='live'">
<input type="submit" value="杀死所选NPC" onclick="$('command').value='kill'">
<input type="submit" value="清除所选NPC" onclick="$('command').value='del'">
</td>
</tr>
<? } ?>
</table>

</form>
<? } ?>
