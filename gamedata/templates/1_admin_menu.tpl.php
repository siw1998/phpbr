<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
<form method="post" name="admin" onsubmit="admin.php">
<input type="hidden" name="mode" id="mode" value="admin_menu">
<input type="hidden" name="command" id="command" value="menu">
<table>
<tr>
<td valign="top">
<table class="admin">
<tr>
<td colspan=3 class="tdtitle"><?=$lang['emenu']?></td>
</tr>
<tr>
<th><?=$lang['options']?></th>
<th width="240"><?=$lang['comments']?></th>
<th width="30"><?=$lang['groups']?></th>
</tr>
<tr height="45px">
<td><input type="submit" style="width:100;height:40;" value="<?=$lang['configmng']?>" onclick="$('command').value='configmng'" 
<? if($mygroup < $admin_cmd_list['configmng']) { ?>
disabled="true"
<? } ?>
></td>
<td><?=$lang['configmng_comment']?></td>
<td><?=$admin_cmd_list['configmng']?></td>
</tr>
<tr height="45px">
<td><input type="submit" style="width:100;height:40;" value="<?=$lang['systemmng']?>" onclick="$('command').value='systemmng'" 
<? if($mygroup < $admin_cmd_list['systemmng']) { ?>
disabled="true"
<? } ?>
></td>
<td><?=$lang['systemmng_comment']?></td>
<td><?=$admin_cmd_list['systemmng']?></td>
</tr>
<tr height="45px">
<td><input type="submit" style="width:100;height:40;" value="<?=$lang['gamecfgmng']?>" onclick="$('command').value='gamecfgmng'" 
<? if($mygroup < $admin_cmd_list['gamecfgmng']) { ?>
disabled="true"
<? } ?>
></td>
<td><?=$lang['gamecfgmng_comment']?></td>
<td><?=$admin_cmd_list['gamecfgmng']?></td>
</tr>
<tr height="45px">
<td><input type="submit" style="width:100;height:40;" value="<?=$lang['banlistmng']?>" onclick="$('command').value='banlistmng'" 
<? if($mygroup < $admin_cmd_list['banlistmng']) { ?>
disabled="true"
<? } ?>
></td>
<td><?=$lang['banlistmng_comment']?></td>
<td><?=$admin_cmd_list['banlistmng']?></td>
</tr>
<tr height="45px">
<td><input type="submit" style="width:100;height:40;" value="<?=$lang['gmlist']?>" onclick="$('command').value='gmlist'" 
<? if($mygroup < $admin_cmd_list['gmlist']) { ?>
disabled="true"
<? } ?>
></td>
<td><?=$lang['gmlist_comment']?></td>
<td><?=$admin_cmd_list['gmlist']?></td>
</tr>
<tr height="45px">
<td><input type="submit" style="width:100;height:40;" value="<?=$lang['urlist']?>" onclick="$('command').value='urlist'" 
<? if($mygroup < $admin_cmd_list['urlist']) { ?>
disabled="true"
<? } ?>
></td>
<td><?=$lang['urlist_comment']?></td>
<td><?=$admin_cmd_list['urlist']?></td>
</tr>

</table>
</td>
<td valign="top">	
<table class="admin">
<tr>
<td colspan=3 class="tdtitle"><?=$lang['gmenu']?></td>
</tr>
<tr>
<th><?=$lang['options']?></th>
<th width="240"><?=$lang['comments']?></th>
<th width="30"><?=$lang['groups']?></th>
</tr>
<tr height="45px">
<td><input type="submit" style="width:100;height:40;" value="<?=$lang['pcmng']?>" onclick="$('command').value='pcmng'" 
<? if($mygroup < $admin_cmd_list['pcmng']) { ?>
disabled="true"
<? } ?>
></td>
<td><?=$lang['pcmng_comment']?></td>
<td><?=$admin_cmd_list['pcmng']?></td>
</tr>
<tr height="45px">
<td><input type="submit" style="width:100;height:40;" value="<?=$lang['npcmng']?>" onclick="$('command').value='npcmng'" 
<? if($mygroup < $admin_cmd_list['npcmng']) { ?>
disabled="true"
<? } ?>
></td>
<td><?=$lang['npcmng_comment']?></td>
<td><?=$admin_cmd_list['npcmng']?></td>
</tr>
<tr height="45px">
<td><input type="submit" style="width:100;height:40;" value="<?=$lang['gameinfomng']?>" onclick="$('command').value='gameinfomng'" 
<? if($mygroup < $admin_cmd_list['gameinfomng']) { ?>
disabled="true"
<? } ?>
></td>
<td><?=$lang['gameinfomng_comment']?></td>
<td><?=$admin_cmd_list['gameinfomng']?></td>
</tr>
<tr height="45px">
<td><input type="submit" style="width:100;height:40;" value="<?=$lang['antiAFKmng']?>" onclick="$('command').value='antiAFKmng'" 
<? if($mygroup < $admin_cmd_list['antiAFKmng']) { ?>
disabled="true"
<? } ?>
></td>
<td><?=$lang['antiAFKmng_comment']?></td>
<td><?=$admin_cmd_list['antiAFKmng']?></td>
</tr>
<tr height="45px">
<td><input type="submit" style="width:100;height:40;" value="<?=$lang['gamecheck']?>" onclick="$('command').value='gamecheck'" 
<? if($mygroup < $admin_cmd_list['gamecheck']) { ?>
disabled="true"
<? } ?>
></td>
<td><?=$lang['gamecheck_comment']?></td>
<td><?=$admin_cmd_list['gamecheck']?></td>
</tr>
</table>
</td>
</tr>
</table>

</form> 