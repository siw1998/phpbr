<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
<form method="post" name="systemmng" onsubmit="admin.php">
<input type="hidden" name="mode" value="systemmng">
<input type="hidden" id="command" name="command" value="">	
<table class="admin">
<tr>
<th><?=$lang['variable']?></th>
<th><?=$lang['value']?></th>
<th><?=$lang['comment']?></th>
</tr>
<tr>
<td><?=$lang['adminmsg']?></td>
<td><textarea cols="30" rows="4" style="overflow:auto" name="adminmsg" value=""><?=$adminmsg?></textarea></td>
<td><?=$lang['adminmsg_comment']?></td>
</tr>
<tr>
<td><?=$lang['systemmsg']?></td>
<td><textarea cols="30" rows="4" style="overflow:auto" name="systemmsg" value=""><?=$systemmsg?></textarea></td>
<td><?=$lang['systemmsg_comment']?></td>
</tr>
<tr>
<td><?=$lang['startmode']?></td>
<td><?=$startmode_input?></td>
<td><?=$lang['startmode_comment']?></td>
</tr>
<tr>
<td><?=$lang['starthour']?></td>
<td><input type="text" name="starthour" value="<?=$starthour?>" size="30"></td>
<td><?=$lang['starthour_comment']?></td>
</tr>
<tr>
<td><?=$lang['startmin']?></td>
<td><input type="text" name="startmin" value="<?=$startmin?>" size="30"></td>
<td><?=$lang['startmin_comment']?></td>
</tr>
<tr>
<td><?=$lang['iplimit']?></td>
<td><input type="text" name="iplimit" value="<?=$iplimit?>" size="30"></td>
<td><?=$lang['iplimit_comment']?></td>
</tr>
<tr>
<td><?=$lang['newslimit']?></td>
<td><input type="text" name="newslimit" value="<?=$newslimit?>" size="30"></td>
<td><?=$lang['newslimit_comment']?></td>
</tr>
<tr>
<td><?=$lang['alivelimit']?></td>
<td><input type="text" name="alivelimit" value="<?=$alivelimit?>" size="30"></td>
<td><?=$lang['alivelimit_comment']?></td>
</tr>
<tr>
<td><?=$lang['winlimit']?></td>
<td><input type="text" name="winlimit" value="<?=$winlimit?>" size="30"></td>
<td><?=$lang['winlimit_comment']?></td>
</tr>
<tr>
<td><?=$lang['noiselimit']?></td>
<td><input type="text" name="noiselimit" value="<?=$noiselimit?>" size="30"></td>
<td><?=$lang['noiselimit_comment']?></td>
</tr>
<tr>
<td><?=$lang['chatlimit']?></td>
<td><input type="text" name="chatlimit" value="<?=$chatlimit?>" size="30"></td>
<td><?=$lang['chatlimit_comment']?></td>
</tr>
<tr>
<td><?=$lang['chatrefresh']?></td>
<td><input type="text" name="chatrefresh" value="<?=$chatrefresh?>" size="30"></td>
<td><?=$lang['chatrefresh_comment']?></td>
</tr>
<tr>
<td><?=$lang['chatinnews']?></td>
<td><input type="text" name="chatinnews" value="<?=$chatinnews?>" size="30"></td>
<td><?=$lang['chatinnews_comment']?></td>
</tr>
</table>
<input type="submit" value="修改" onclick="$('command').value='edit';">
</form> 