<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
<input type="hidden" name="mode" value="team">
<input type="hidden" name="command" value="<?=$teamcmd?>">
<? if($teamcmd == 'teammake') { if($teamID) { ?>
你已经加入了队伍  <span class="yellow"><?=$teamID?></span> 。<br>
<? } elseif($sp <= $team_sp) { ?>
体力不足，不能创建队伍。至少需要 <span class="yellow"><?=$team_sp?></span> 点体力。<br>
<? } else { ?>
<div>队伍名称 : <input size="15" type="text" name="nteamID" maxlength="30"></div>
<div>15个字以内。<div>
<div>队伍密码 : <input size="15" type="text" name="nteamPass" maxlength="30"></div>
<div>15个字以内。<div>
<? } } elseif($teamcmd == 'teamjoin') { ?>
<div>队伍名称 : <input size="15" type="text" name="nteamID" maxlength="30"></div>
<div>15个字以内。<div>
<div>队伍密码 : <input size="15" type="text" name="nteamPass" maxlength="30"></div>
<div>15个字以内。<div>
<? } ?>
