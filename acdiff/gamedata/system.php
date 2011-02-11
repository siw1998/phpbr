<?php

/*Game system settings*/

//文件验证字符串
$checkstr = "<? if(!defined('IN_GAME')) exit('Access Denied'); ?>\n";
//是否允许游客进入插件。0=不允许，1=允许
$isLogin = 1;
//是否缓存css文件。0=不缓存，1=缓存
$allowcsscache = 1;
//站长留言
$adminmsg = '';
//游戏开始方式 0=后台手动开始，1=每天固定时间始，2=上局结束后，间隔固定时间开始
$startmode = 0;
//游戏开始的小时，如果，如果$startmode = 1,表示开始时间0~23，如果$startmode = 2，表示间隔时间，>0
$starthour = 0;
//游戏开始的分钟数，范围1~59
$startmin = 5;
//游戏所用配置文件
$gamecfg = 1;


//同ip限制激活人数。0为不限制
$iplimit = 0;
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

//开启NPC台词功能？0为不开启，1为开启
$npcchaton = 1;
//反挂机系统间隔时间，单位分钟
$antiAFKertime=10;

//■ 空手武器 ■
$nowep = '拳头';

//■ 无防具 ■
$noarb = '内衣';
//■ 无道具 ■
$noitm = '--';
//■ 无限耐久度 ■
$nosta = '∞';
//■ 无属性 ■
$nospk = '--';
//■ 多种类武器 ■
$mltwk = '泛用兵器';
//■ 多重属性 ■
//$mltspk = '多重属性';


//游戏状态描述
$gstate = Array(0 => '已结束',10 => '即将开始',20 => '开放激活',30 => '人数已满',40=> '连斗中');
$gwin = Array(0 => '程序故障', 1 => '全部死亡',2 => '最后幸存',3 => '锁定解除',4 => '无人参加',5 => '核爆全灭');
$week = Array('日','一','二','三','四','五','六');
$clubinfo = Array(0=>'无',1=>'铁拳无敌',2=>'见敌必斩',3=>'灌篮高手',4=>'狙击鹰眼',5=>'拆弹专家',6=>'音速小子',7=>'锡安成员',8=>'黑衣组织',9=>'超能力者',10=>'人肉搜索', 11=>'富家子弟',12=> '天赋异禀',13=> '肌肉兄贵' ,14=>'根性兄贵',15=>'<span class="red">L5状态</span>');
$wthinfo = Array('晴天','大晴','多云','小雨','暴雨','台风','雷雨','下雪','起雾','浓雾','<span class="yellow">瘴气</span>','<span class="red">龙卷风</span>','<span class="clan">暴风雪</span>','<span class="blue">冰雹</span>');
$sexinfo = Array('m' => '男生', 'f' => '女生');
$hpinfo = Array('并无大碍','伤痕累累','生命危险','已经死亡');
$spinfo = Array('精力充沛','略有疲惫','精疲力尽','已经死亡');
$rageinfo = Array('平静','愤怒','暴怒','已经死亡');
$wepeinfo = Array('不值一提','略有威胁','威力可观','无敌神器');
$poseinfo = Array('通常','攻击姿态','防守姿态','探索姿态','隐藏姿态','治疗姿态');
$tacinfo = Array('通常','','重视防御','重视反击','重视躲避');
$typeinfo = Array(0=>'参战者',1=>'董事长',2=>'全息幻象',3=>'各路党派',4=>'非作战人员',5=>'代码聚合体',6=>'游魂',7=>'首席执行官',8=>'管理员',9=>'活动盔甲');
$killmsginfo = Array(0=>'',1=>'你还不懂得运用你的力量，咱为此感到惋惜。',2=>'猎杀任务执行中。',3=>'你弱爆了！',4=>'啊……对不起！对不起！',5=>'记住，轻敌可是会死的。',6=>'忘记历史就意味着背叛，背叛就意味着……死亡。',7=>'你的实力还远远不及董事长的脚根呢。',8=>'死吧。',9=>'Let the darkness DIE!!');
$lwinfo = Array(
	0 => '',
	1 => '呜……这个躯体……咱还是无法自由运用啊……',
	2 => '机体受损过重，任务被迫中止。',
	3 => '我觉得我还可以抢救一下……',
	4 =>'怎……怎么会这样？',
	5 => Array(
		'冴月 麟' => '控血果然容易出意外啊。',
		'某无名' => '唔…………'
	),
	6 => '不……不准拿走……快还给我……还给我……',
	7 => Array(
		'电击使 御坂 美琴' => '力尽了……我还……不够强大啊……',
		'班主任 坂持 金发' => '记住吧：如果你憎恨一个人，便要为此付出代价。',
		'花之主 风见 幽香' => '输掉了啊，不过下次死的就是你了哦！'
	),
	8 => '系统出错了吗？',
	9 => '我已经没有什么可以教给你的了。'
);
$infinfo = Array('b' => '<span class="red">胸</span>', 'h' => '<span class="red">头</span>', 'a' => '<span class="red">腕</span>', 'f' => '<span class="red">足</span>', 'p' => '<span class="purple">毒</span>', 'u' => '<span class="red">烧</span>', 'i' => '<span class="clan">冻</span>', 'e' => '<span class="yellow">麻</span>');
$attinfo = Array('N' => '徒手殴打', 'P' => '殴打','K' => '斩刺', 'G' => '射击', 'C' => '投掷', 'D' => '设置引信伏击', 'F' => '释放灵力攻击');
$skillinfo = Array('N' => 'wp', 'P' => 'wp', 'K' => 'wk', 'G' => 'wg', 'C' => 'wc', 'D' => 'wd', 'F'=> 'wf');
//$rangeinfo = Array('N' => 'S', 'P' => 'S', 'K' => 'S', 'G' => 'M', 'C' => 'M', 'D' => 'L', 'F'=> 'M'); #各种攻击方式的射程，移动到combatcfg.php
$restinfo = Array('通常','睡眠','治疗','静养');
$noiseinfo = Array('G' => '枪声', 'D' => '爆炸声', 'F'=>'灵气');
$exdmgname = Array('p' => '毒性攻击', 'u' => '火焰燃烧', 'i'=>'冻气缠绕', 'd'=>'爆炸','e'=>'电击');
$exdmginf = Array('h' => '<span class="red">头部受伤</span>', 'b' => '<span class="red">胸部受伤</span>', 'a'=> '<span class="red">腕部受伤</span>', 'f'=> '<span class="red">足部受伤</span>', 'p'=> '<span class="purple">中毒</span>', 'u'=> '<span class="red">烧伤</span>', 'i'=> '<span class="clan">冻结</span>', 'e'=> '<span class="yellow">身体麻痹</span>');
$infwords = Array('h' => '<span class="red">头部受伤</span>', 'b' => '<span class="red">胸部受伤</span>', 'a'=> '<span class="red">腕部受伤</span>', 'f'=> '<span class="red">足部受伤</span>', 'p'=> '<span class="purple">毒发</span>', 'u'=> '<span class="red">烧伤发作</span>', 'i'=> '<span class="clan">冻结影响</span>', 'e'=> '<span class="yellow">身体麻痹</span>');
$chatinfo = Array(0 => '全员', 1 => '队伍', 2 => '密语', 3 => '遗言', 4 => '公告', 5 => '系统');
$npcchat = Array(
	1 => Array(
		'林无月' => Array(
			0 => '“竟然有能力闯到这里，还以为这次会轻松些呢……看来咱得亲自上阵了。”',
			1 => '“身手不错，不过咱是不会留情的。”',
			2 => '“咱很欣赏你的实力，可不要让咱太失望了。”',
			3 => '“能将咱逼到这个地步……你，有两下子呢。”',
			4 => '“看来咱不能再抱着玩乐的心态了……你，准备好迎接咱的攻击了么？”',
			5 => '“你觉得你的攻击对咱有效果吗？”',
			6 => '“难道你觉得咱会被这样的招式击倒？”',
			7 => '“咱今日真是棋逢对手啊，越来越有意思了呢。”',
			8 => '“咱可没那么容易倒下！”',
			9 => '“呜……这个躯体……咱还是无法自由运用啊……”',
			10 => '“真是的，这个位置的话没法全力反击啊……”',
			11 => '“真是的，竟然在射程之外啊……”',
			12 => '“咱也是生于常磐森林的人啊！”',
			13 => '“你还不懂得运用你的力量，咱为此感到惋惜。”',
			'color' => 'evergreen'
		)
	),
	5 => Array(
		'冴月 麟' => Array(
			0 => '“在咱看来你只是代码而已。咱出手不知轻重，请你原谅。”',
			1 => '“为了摆出攻击姿势，你忽略了隐蔽？”',
			2 => '“为了寻找重要道具，你丢弃了谨慎？”',
			3 => '“记住，NPC先制攻击的几率跟他的HP无关。”',
			4 => '“记住，NPC是不会‘真正意义上’主动进攻的。”',
			5 => '“这样的伤害值……也许你的熟练度还不够高？”',
			6 => '“这样的伤害值……也许你的武器攻击力还不够高？”',
			7 => '“HP有点低啊，或许下次加个自动回复功能会更有趣一点？”',
			8 => '“HP有点低啊，或许下次加个自动躲避功能会更有趣一点？”',
			9 => '“控血果然容易出意外啊。”',
			10 => '“唔，随机数竟然是……你的运气不错呢。”',
			11 => '“唔，攻击范围不够……你很懂得动脑筋呢。”',
			12 => '冴月 麟周身释放出了无数代码：“魂！常磐之力！Unlimited Code Works！”',
			13 => '“记住，轻敌可是会死的。”',
			'color' => 'yellow'
		),
		'某无名' => Array(
			0 => '“……”',
			1 => '“……”',
			2 => '“……”',
			3 => '“……”',
			4 => '“……”',
			5 => '“……”',
			6 => '“……”',
			7 => '“……”',
			8 => '“……”',
			9 => '“……”',
			10 => '“……”',
			11 => '“……”',
			12 => '“……！”',
			13 => '“…………”',
			'color' => 'yellow'
		)
	),
	6 => Array(
		'Acg_Xilin' => Array(
			0 => '“就凭你也想偷走我重要的东西？我不允许。你去死罢。”',
			1 => '“叽叽咕咕（听不懂的自言自语）”',
			2 => '“为了我的收藏我不会善罢甘休！”',
			3 => '“快看我美丽的收藏品……这样的宝贝，怎么能白送给你！？”',
			4 => '“我跟强盗势不两立！”',
			5 => '“你这样的攻击，没关系么？没关系，没问题。”',
			6 => '“哈哈哈哈，你根本不能让我满足！”',
			7 => '“我诅咒你，妄图打砸抢烧的败类！”',
			8 => '“嘎啊！——（听不懂的嚎叫声）”',
			9 => '“不……不准拿走……快还给我……还给……我……”',
			10 => '“运气真差……运气真差……”',
			11 => '“竟打不到……竟打不到……”',
			12 => 'Acg_Xilin露出了古怪的笑容：“尝尝我的奥义吧，这可是我精心收藏的魔法哟！”',
			13 => '“忘记历史就意味着背叛，背叛就意味着……死亡。”',
			'color' => 'yellow'
		)
	),
	7 => Array(
		'电击使 御坂 美琴' => Array(
			0 => '“擅自侵入禁区的你，应该对自己的下场有所觉悟了吧？”',
			1 => '“只要杀死了你，净化网络的计划就离成功更近一步了吧！”',
			2 => '“知道电磁炮吗？接下这一招，然后死去吧！”',
			3 => '“你的能力竟然这么强吗……看来我必须使出全力了！”',
			4 => '“你这样的随意践踏别人的梦想的人……最差劲了！”',
			5 => '“我可是LEVEL 5的超能力者！普通人的攻击怎么会对我起作用？”',
			6 => '“我还以为入侵禁区的会是什么样的强者……竟然只有你这点实力吗？”',
			7 => '“我才不会因为这样的攻击而倒下！”',
			8 => '“我也有我的立场啊！”',
			9 => '“力尽了……我还……不够强大啊……”',
			10 => '“没预料到这种情况……”',
			11 => '“电磁炮50米的射程竟然不够……”',
			12 => '御坂 美琴周身被蓝色电光层层笼罩：“别以为我的能力只能击飞硬币！”',
			13 => '“所以说，你这样的人最差劲了。”',
			'color' => 'clan'
		),
		'班主任 坂持 金发' => Array(
			0 => '“这个世界没有项圈，那只好由老师我亲手实施惩罚了。”',
			1 => '“现在的年轻人都蔑视成年人，应该煞一煞他们的威风。”',
			2 => '“对蔑视法律的学生就应该先发制人。”',
			3 => '“有两下子，但是你不可能次次都那么走运。”',
			4 => '“老师也有老师的苦衷啊……好好地死去吧。”',
			5 => '“你还很精神嘛，这样的势头很好，继续努力吧。”',
			6 => '“想违抗BR法可不是那么容易的。”',
			7 => '“我好像受了很重的伤呢。”',
			8 => '“我也变成无能的成年人了啊。”',
			9 => '“记住吧：如果你憎恨一个人，便要为此付出代价。”',
			10 => '“这样的情况，暂时撤退吧。”',
			11 => '“距离太远了，暂时撤退吧。”',
			12 => '坂持 金发举枪瞄准：“虽然老师干预游戏是违反规则的……”',
			13 => '“记住这个吧，人生是游戏。”',
			'color' => 'yellow'
		),
		'花之主 风见 幽香' => Array(
			0 => '“于是，还真有胆敢闯进禁区的人啊，我就奉陪到底吧。”',
			1 => '“把妖力当做伪科学而轻视那就太可笑了。”',
			2 => '“我与你之间究竟谁最强呢，就来分个胜负吧。”',
			3 => '“可不要以为我的能力只是让花朵开放那种程度的哦？”',
			4 => '“竟然能逼我使出全力，真是愉快的战斗啊。”',
			5 => '“这种程度的力量，还不够跟我过招呢。”',
			6 => '“这样的伤痛对于妖怪来说根本不算什么呢。”',
			7 => '“杂草大概是最适合你的植物吧？”',
			8 => '“轮到我反击了呢，我会把你的攻击加倍还给你的哦？”',
			9 => '“输掉了啊，不过下次死的就是你了哦！”',
			10 => '“不妙啊，轻敌了，总之先撤退吧。”',
			11 => '“弹幕射程不够啊，总之先撤退吧。”',
			12 => '风见 幽香张开阳伞做出了一个潇洒的转身：“也许你还没见识过魔炮的力量吧？”',
			13 => '“我还没满足呢，可别就这样轻易地死掉了哦。”',
			'color' => 'lime'
		)
	)
);
$iteminfo = Array(
	'N' => '无',
	'WN' => '空手',#空手
	'WP' => '钝器',
	'WG' => '远程兵器',
	'WGK' => '泛用兵器',
	'WK' => '锐器',
	'WC' => '投掷兵器',
	'WD' => '爆炸物',
	'WF' => '灵力兵器',
	'DN' => '内衣',#内衣
	'DB' => '身体装备',
	'DH' => '头部装备',
	'DA' => '手臂装备',
	'DF' => '腿部装备',
	'EW' => '天气控制',
	'A'  => '饰物',
	'Ag' => '同志饰物',
	'Al' => '热恋饰物',
	'HH' => '生命恢复',
	'HS' => '体力恢复',
	'HB' => '命体恢复',
	'PH' => '生命恢复',
	'PS' => '体力恢复',
	'PB' => '命体恢复',
	'PH1' => '生命恢复',
	'PS1' => '体力恢复',
	'PB1' => '命体恢复',
	'PH2' => '生命恢复',
	'PS2' => '体力恢复',
	'PB2' => '命体恢复',
	'R' => '探测仪器',
	'C' => '药剂',
	'TO' => '陷阱',
	'TN' => '陷阱',
	'Y' => '特殊',
	'GB' => '手枪弹药',
	'GBr' => '机枪弹药',
	'GBu' => '火焰弹药',
	'GBi' => '冰冻弹药',
	'GBe' => '电气弹药',
	'X'=> '合成专用',
	'VV'=> '全系提升',
	'VP'=> '殴熟提升',
	'VG'=> '射熟提升',
	'VK'=> '斩熟提升',
	'VC'=> '投熟提升',
	'VD'=> '爆熟提升',
	'VF'=> '灵熟提升',
	'MA'=> '攻击提升',
	'MD'=> '防御提升',
	'ME'=> '经验提升',
	'MS'=> '体力上限',
	'MH'=> '生命上限',
	'MV'=> '熟练提升'
	);
$itemspkinfo = Array(
	'N' => '防拳',
	'P' => '防殴',
	'K' => '防斩',
	'G' => '防弹',
	'C' => '防投',
	'D' => '防爆',
	'F' => '防符',
	'A' => '全系防御',
	'a' => '全属性防御',
	'g' => '同志',
	'l' => '热恋',
	'S' => '消音',
	'c' => '重击辅助',
	'h' => '防伤',
	'r' => '连击',
	'e' => '电击',	
	'E' => '绝缘',
	'd' => '爆炸',
	'o' => '一发',
	'p' => '带毒',
	'q' => '防毒',
	'u' => '火焰',
	'U' => '防火',
	'i' => '冻气',
	'I' => '防冻',
	'H' => 'HP制御',
	'z' => '天然',
	);
$shops = Array(0,14,27);
$hospitals = Array(11,19);
$plsinfo = Array(
	0=>'无月之影',
	1=>'端点',
	2=>'RF高校',
	3=>'雪之镇',
	4=>'索拉利斯',
	5=>'指挥中心',
	6=>'梦幻馆',
	7=>'清水池',
	8=>'白穗神社',
	9=>'墓地',
	10=>'麦斯克林',
	11=>'对天使用作战本部',
	12=>'夏之镇',
	13=>'三体星',
	14=>'光坂高校',
	15=>'守矢神社',
	16=>'常磐森林',
	17=>'常磐台中学',
	18=>'秋之镇',
	19=>'精灵中心',
	20=>'春之镇',
	21=>'圣Gradius学园',
	22=>'初始之树',
	23=>'幻想世界',
	24=>'永恒的世界',
	25=>'妖精驿站',
	26=>'键刃墓场',
	27=>'花菱商厦',
	28=>'FARGO前基地',
	29=>'风祭森林'
);
$xyinfo = Array(
	0=>'B-2',
	1=>'A-6',
	2=>'H-3',
	3=>'B-6',
	4=>'F-10',
	5=>'D-6',
	6=>'H-6',
	7=>'F-3',
	8=>'E-10',
	9=>'J-4',
	10=>'I-8',
	11=>'D-8',
	12=>'F-9',
	13=>'H-4',
	14=>'H-8',
	15=>'G-1',
	16=>'I-2',
	17=>'A-5',
	18=>'G-4',
	19=>'D-4',
	20=>'I-7',
	21=>'F-7',
	22=>'J-6',
	23=>'A-8',
	24=>'C-9',
	25=>'D-2',
	26=>'A-1',
	27=>'F-8',
	28=>'E-1',
	29=>'F-5'
);
$areainfo = Array
	(
	0=>"充满了灵力的永久禁区，也是整个战场的入口。<br>逗留在这里也许会被时空吞噬……<br><span class=\"yellow\">买完东西就快点离开吧。</span><br>",
	1=>"蓝白色的大地上仿佛有种令人心悸的波动在回荡。<br>还是快离开吧。<br>",
	2=>"这是一所位于郊区的高校。<br>之前毕业旅行的学生似乎遇到了惨烈的交通事故，幸存的学生们大概接受心理疏导去了吧。<br>",
	3=>"飘着雪花的北国小镇，俄罗斯风格的建筑使人愈发感到寒冷。<br>",
	4=>"柔软的大地不断变化，在人眼前生长成巨大而诡异的形状，然后在海水的冲刷下四散崩溃。<br>这究竟是什么地方？<br>",
	5=>"海风的腥味表明这幢建筑似乎是从某个岛屿上移动过来的。<br><span class=\"yellow\">自动防御系统还在忠实地工作着，看来需要随时保持警惕。</span><br>",
	6=>"建筑里外都充满了向日葵的香味，然而四处散布的妖怪气息依然让人不寒而栗。<br><span class=\"yellow\">自动防御系统还在忠实地工作着，看来需要随时保持警惕。</span><br>",
	7=>"各种各样的雕像环绕着一个欧式的大水池。<br>池水十分清澈，也许可以直接饮用。<br>",
	8=>"神社空无一人。<br>但是，在这里仰望天空的话，总觉得会被某种忧伤的思绪所感染。<br>",
	9=>"这里埋葬着很多被当做祭品杀死的怪兽。<br>不知道是怎样奇怪的召唤仪式呢……<br>",
	10=>"一踏入这里，身躯就觉得沉重，而且气压也好像陡然增加了许多。<br>大概是个不宜久留的地方。<br>",
	11=>"充满了各种夸张的陷阱的房间，似乎是某所高校的校长室。<br><span class=\"yellow\">在这里，似乎不管受到怎样的伤害也会很快回复。</span><br>",
	12=>"洒满了阳光的靠海的村庄，青色的天空吸引人久久凝望、不能罢怀。<br>",
	13=>"这里连时令都错乱了么？<br>不仅昼夜错乱、忽冷忽热，有时甚至有两三个太阳同时升起……<br>",
	14=>"长长的坂道的尽头是一所学校。<BR>学校规模不小，但总给人寂寥无人之感。<br><span class=\"yellow\">从校内的自动售货机似乎能买到些什么。</span><br>",
	15=>"高大的御柱环绕在山中湖泊周围。尽管景色美丽，却找不见本应在此的巫女。<br>",
	16=>"浓郁的树叶遮住了阳光，是容易被袭击的地方啊……<br>林间不时还有奇怪的生物出没……<br>听说这附近每隔十年都会有超能力者诞生。<br>",
	17=>"不同于现世的先进设备兀自运转着，令人觉得是不是来到了某个技术先进的域外之城。<br><span class=\"yellow\">自动防御系统还在忠实地工作着，看来需要随时保持警惕。</span><br>",
	18=>"与其他住宅区相比，这里的商店特别多。<BR>虽然如此，整个城市弥漫着一种莫名的悲伤的气氛……<br>",
	19=>"巨大的建筑物内，不知名的设备依然在运转。<br>根据残缺不全的说明，<span class=\"yellow\">也许这些机器可以为人治疗伤口和恢复精力？</span><br>",
	20=>"尽管处于春季，也无法掩饰衰败的萧条小镇。<br>逗留在这里总使人感到命运无情……<br>",
	21=>"表面上看去像是标准的贵族女校，<br>有着与学校不相称的停机坪和地下仓库。<br>",
	22=>"在绿地上孤零零矗立的大树，像是一座纪念碑。<BR>这到底意味着什么呢？<br>",
	23=>"被白雪笼罩，一片荒芜的空间……<BR>时空错乱了吗？为什么我会在这里？<br>",
	24=>"诡异的地方……脚下已经看不见什么地面了……<BR>这个地方究竟是什么？<br>",
	25=>"一间孤独的小屋子。<br>貌似没有人住在这里了。<br>门上贴着告示：<br>TRAIN WITH MY HOLOGRAM IF YOU WANT TO --- GA-04<br>",
	26=>"代表光与暗的战士们曾经的战场。<BR>现在只剩下他们的武器，无声地诉说着战争的结局。<br>",
	27=>"荒废的都市里，顶层有着天象馆的废弃商场。<BR>虽然大部分区域都停电了，<span class=\"yellow\">角落里的自动售货机似乎还能运行。</span><br>",
	28=>"现在已经是一团废墟的遗迹。<BR>可能能找到有用的物品也说不定。<br>",
	29=>"传说有神秘力量的森林。<BR>谁知道这个地方会出现什么。<br>"
);

/*Error settings*/
$_ERROR = Array
	(
	'no_login' => '用户未登陆，请从首页登录后再进入游戏',
	'login_check' => '密码错误，请检查密码输入',
	'login_time' => '登录间隔时间过长，请重新登录后进入游戏',
	'login_info' => '用户信息不正确，请清空缓存和Cookie后进入游戏',
	'player_limit' => '本局游戏参加人数已达上限，无法进入，请下局再来',
	'wrong_pw' => '用户信息验证失败，请重新登录论坛后进入游戏',
	'player_exist' => '角色已经存在，请不要重复激活',
	'no_start' => '游戏尚未开始，请稍后再登录',
	'valid_stop' => '本游戏已经停止激活，无法进入，请下局再来',
	'user_ban' => '此账号禁止进入游戏，请与管理员联系',
	'no_admin' => '你不是管理员，不能使用此功能',
	'ip_limit' => '本局此IP激活人数已满，请下局再来',
	'no_power' => '你的管理权限不够，不能进行此操作',
	'wrong_adcmd' => '指令错误，请重新输入',
	'invalid_name' => '用户名含有非法字符，请重新输入',
	);


/*template settings*/
//模板编号。默认为1
define('STYLEID', '1');
define('TEMPLATEID', '1');
define('TPLDIR', './templates/default');


?>