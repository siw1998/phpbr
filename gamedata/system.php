<?php

/*Game system settings*/

//文件验证字符串
$checkstr = "<? if(!defined('IN_GAME')) exit('Access Denied'); ?>\n";
//是否允许游客进入插件。0=不允许，1=允许
$isLogin = 1;
//是否缓存css文件。0=不缓存，1=缓存
$allowcsscache = 1;
//站长留言

$adminmsg = '<h4><span style="color:#ffff00">庆祝美版少女巡航机X在9个月的跳票后成功发售，<br>
活动结束，全概率回复成原来数值，少女补给事件概率调节为4%，数量调节为573。</span></h4>
<div style="color:#fff">
光棍节特别活动已经圆满结束，在3天的活动期里，有三位网友顶着好人卡带来的巨大压力完成了活动所规定的要求。这三位网友分别是——<br><br>
<span class="lime" style="font-size:15pt;line-height:16pt">枪毙的某神</span>（3043局，好人卡数4355）<br>
<span class="lime" style="font-size:15pt;line-height:16pt">凛</span>（3040局，好人卡数2420）<br>
<span class="lime" style="font-size:15pt;line-height:16pt">上帝の左手</span>（3055局，好人卡数2061）<br><br>
让我们祝贺他们获得活动奖励！同时也感谢活动期间所有玩家的热心参与和支持！<br>
由于某程序员深陷加班陷阱，奖励将择期发放，敬请期待！<br><br>
</div>
<img src="GRPBANNER.jpg" /><br>
<iframe width=365 height="300" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?width=0&height=300&fansRow=1&ptype=0&speed=0&skin=10&isTitle=0&noborder=0&isWeibo=1&isFans=0&uid=1583697851&verifier=d5e5b6db"></iframe><br>
<font style="background:url(http://dts.acfun.cn/img/backround9.gif) repeat-x">';
$adminmsg2 = '<h1>官方0服</h1>感谢ACG_Xilin和Majia255提供服务器空间。<br>游戏版本2.98 SP9<br>1服：<a href = "http://nmforce.net/lg2/"> http://nmforce.net/lg2/</a><br>2服：<a href="http://ug3g.com/lg/">http://ug3g.com/lg/</a><br>大逃殺 叁：<a href="http://mirage.nmforce.net/">http://mirage.nmforce.net/</a><br>';
//游戏开始方式 0=后台手动开始，1=每天固定时间开始，2=上局结束后，间隔固定小时后的整点开始，3=上局结束后，间隔固定分钟开始
$startmode = 3;
//游戏开始的小时，如果，如果$startmode = 1,表示开始时间0~23，如果$startmode = 2，表示间隔小时，>0，如果$startmode = 3，表示间隔分钟，>0
$starthour = 5;
//游戏开始的分钟数，范围1~59
$startmin = 3;
//游戏所用配置文件
$gamecfg = 1;


//同ip限制激活人数。0为不限制
$iplimit = 2;
//头像数量（男女相同）
$iconlimit = 20;
//游戏进行状况显示条数
$newslimit = 50;
//生存者显示条数
$alivelimit = 30;
//历史优胜者显示条数
$winlimit = 50;
//枪声间隔时间(秒)
$noiselimit = 300;

//游戏内聊天信息显示条数
$chatlimit = 50;
//聊天信息更新时间(单位:毫秒)
$chatrefresh = 15000;
//游戏进行中是否显示聊天。0为不显示，数字为显示条数
$chatinnews = 50;

//开启gzip压缩功能？0为不开启，1为开启
//$gzipcompress=0;
//开启NPC台词功能？0为不开启，1为开启
$npcchaton = 1;
//有台词的NPC
$npccanchat = Array(1,5,6,7,10);
//反挂机系统间隔时间，单位分钟
$antiAFKertime = 10;
//尸体保护时间，单位秒
$corpseprotect = 10;
//是否启动冷却时间，0为不启动，1为启动；
$coldtimeon = 1;
//是否显示冷却时间倒计时，0为不显示，1为显示；
$showcoldtimer = 0;
//移动的冷却时间，单位微秒
$movecoldtime=900;
//探索的冷却时间，单位微秒
$searchcoldtime=900;
//使用物品的冷却时间，单位微秒
$itemusecoldtime=500;

/*template settings*/
//模板编号。默认为1
define('STYLEID', '1');
define('TEMPLATEID', '1');
define('TPLDIR', './templates/default');

?>