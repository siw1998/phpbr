<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
想采取什么基本姿态？<br>

<input type="hidden" name="mode" value="special">
<input type="radio" name="command" id="menu" value="menu" checked><a onclick=sl('menu'); href="javascript:void(0);" >返回</a><br><br>
<? if(is_array($poseinfo)) { foreach($poseinfo as $key => $value) { if($value) { ?>
<input type="radio" name="command" id="pose<?=$key?>" value="pose<?=$key?>"><a onclick=sl('pose<?=$key?>'); href="javascript:void(0);" ><?=$value?> </a><br>
<? } } } ?>
 

