<?php

define('CURSCRIPT', 'end');

require_once './include/common.inc.php';
require_once './include/game.func.php';

if(!$cuser||!$cpass) { gexit($_ERROR['no_login'],__file__,__line__); } 
$result = $db->query("SELECT * FROM {$tablepre}players WHERE name = '$cuser' AND type = 0");
if(!$db->num_rows($result)) { header("Location: index.php");exit(); }

$pdata = $db->fetch_array($result);
if($pdata['pass'] != $cpass) {
	$tr = $db->query("SELECT `password` FROM {$tablepre}users WHERE username='$cuser'");
	$tp = $db->fetch_array($tr);
	$password = $tp['password'];
	if($password == $cpass) {
		$db->query("UPDATE {$tablepre}players SET pass='$password' WHERE name='$cuser'");
	} else {
		gexit($_ERROR['wrong_pw'],__file__,__line__);
	}
}

extract($pdata);
init_playerdata();

if($hp<=0 || $state>=10) {
	$result = $db->query("SELECT lastword FROM {$tablepre}users WHERE username='$name'");
	$motto = $db->result($result,0);
	$dtime = date("Y 年 m 月 d 日 H 时 i 分 s 秒",$endtime);
	$dinfo = Array(
	10 => '不知道什么原因，你死去了。<br>这应该是一个BUG，请通知管理员。<br>',
	11 => '“滴滴滴——”<br>这是……手表的整点提示音？<br>不好，我还没确认这次的禁区情况……<br>还没等你有所反应，死神一般的空间裂缝已经把你吞没了。<br>等待你的只有死亡……<br>',
	12 => '“呜……到此为止了吗……”<br>毒素造成的痛苦让你无法再坚持下去了。<br>你吐出嘴里最后一点深黑的血液，仰面倒了下去。<br>',
	13 => '“不好！”<br>也许在平时的逆看来，这只是小菜一碟……<br>但对于此刻遍体鳞伤的你来说，<br>眼前的突发状况无异于压垮骆驼的最后一根稻草。<br>你不甘心地倒下了，再也没有起来。<br>',
	14 => '“也许咱应该断定你上网成瘾？”<br>这是……林无月的声音！<br>从哪里传来的？<br>她怎么会知道我试图入侵虚拟世界的控制系统？<br>还没等你反应过来，你就两眼一黑，什么都不知道了。<br>',
	15 => '“我很抱歉，不过这是林无月的意思。”<br>面前突然出现的，是一个陌生男子。<br>这人说些什么怪话呢？<br>你正要上前问个究竟，只见男子手中白光一闪，你的意识就此烟消云散。<br>',
	16 => '“我很抱歉，不过这是林无月的意思。”<br>面前突然出现的，是一个陌生男子。<br>这人说些什么怪话呢？<br>你正要上前问个究竟，只见男子手中白光一闪，你的意识就此烟消云散。<br>',
	17 => '“呜……到此为止了吗……”<br>身体已被冰雹砸得千疮百孔，伤痛让你无法再坚持下去了。<br>你脚下一软，向前栽倒，失去了意识。<br>',
	18 => '“呜……到此为止了吗……”<br>烧伤导致的伤痛让你无法再坚持下去了。<br>你脚下一软，向前栽倒，失去了意识。<br>',
	20 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个挥舞双拳的身影，在你失神的瞳孔中逐渐淡去……<br>',
	21 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个紧握钝器的身影，在你失神的瞳孔中逐渐淡去……<br>',
	22 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个腰佩刀剑的身影，在你失神的瞳孔中逐渐淡去……<br>',
	23 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个扛着枪械的身影，在你失神的瞳孔中逐渐淡去……<br>',
	24 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个手持投掷武器的身影，在你失神的瞳孔中逐渐淡去……<br>',
	25 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个手持爆炸物的身影，在你失神的瞳孔中逐渐淡去……<br>',
	26 => '“这味道……不对！”<br>饥渴难耐的你才咬了一口手中的补给品，就觉得不对劲。<br>然而，你发现得太晚了……<br>剧毒在几秒钟之内就夺去了你的生命。<br>',
	27 => '“不好！”<br>也许在平时的你看来，这只是小菜一碟……<br>但对于此刻遍体鳞伤的你来说，<br>眼前的陷阱无异于压垮骆驼的最后一根稻草。<br>你不甘心地倒下了，再也没有起来。<br>',
	28 => '你被很奇怪的事情夺去了生命。<br>也许这跟一个名叫夜什么月的人有一星半点的关系。<br>具体情况请参见游戏状况。<br>',
	29 => '一切……都结束了吧……<br>你无力地倒在地上，<br>眼睁睁地看着血液从致命的伤口喷涌而出。<br>一个攥着符札的身影，在你失神的瞳孔中逐渐淡去……<br>',
	30 => '好奇心果然杀死猫啊……<br>你勉强支起破碎的身躯，<br>看着那个你刚才按下的带按钮的小盒子无奈地笑着。<br>这真是残酷的恶作剧啊。<br>你的意识逐渐模糊了……<br>',
	31 => '注射器里的药液才打进一半，你就觉得身体有异样。<br>“脖子……好痒……”<br>你疯狂地抠着脖子上的淋巴腺，<br>很快就倒在动脉破裂而流出的血泊中……<br>',
	32 => '“就躲在这里，让那些人自相残杀去吧。”<br>你正打着自己的小算盘，却没注意到特殊执行部队已经悄悄来到你的面前。<br>“你以为董事长会容忍你这种浪费他人时间的行为么？”<br>在机枪扫射之下你瞬间千疮百孔……<br>',
	33 => '“对不起、对不起！能让我迫降一下吗？”<br>勉强躲过弹幕的你，忽然听到头上传来这样焦急的道歉声。<br>少女的迫降……？莫非是指……<br>少女娇柔的话音让你放松了警惕。<br>还没等你反应过来，少女——以及她乘坐的、几十吨重的机体——便把你的整个世界压得粉碎……<br>'
	);
	$dtitle = Array(10 => '莫名身亡',11 => '禁区停留',12 => '毒发身亡', 13 => '意外死亡',14 => '入侵失败', 15 => '黑幕抹杀', 16 => '黑幕抹杀', 17 => '遭遇天灾',18 => '烧伤不治', 20 => '玩家杀害', 21 => '玩家杀害', 22 => '玩家杀害', 23 => '玩家杀害', 24 => '玩家杀害', 25 => '玩家杀害', 26 => '误食毒物', 27 => '误触陷阱', 28 => '死亡笔记',29 => '玩家杀害', 30 => '误触机关', 31 => 'L5病发', 32 => '挂机受罚', 33 => '天降软妹，无福消受');
	if($bid) {
		$result = $db->query("SELECT name FROM {$tablepre}players WHERE pid='$bid'");
		if($db->num_rows($result)) { $kname = $db->result($result,0); }
	}
}

include template('end');


?>