<?php
if(!defined('IN_GAME')) {
	exit('Access Denied');
}

function event(){
	global $mode,$log,$hp,$sp,$inf,$pls,$rage,$money;
	global $mhp,$msp,$wp,$wk,$wg,$wc,$wd,$wf;
	global $rp,$killnum;

	$dice1 = rand(0,5);
	$dice2 = rand(20,40);//原为rand(5,10)
	
	if($pls == 0) { //无月之影
	} elseif($pls == 1) { //端点
	} elseif($pls == 2) { //现RF高校
		$log = ($log . "突然，一个戴着面具的怪人出现了！<BR>");
		if($dice1 == 2){
			$log = ($log . "“呜嘛呜——！”<br>被怪人<span class=\"red\">打中了头</span>！<BR>");
			$inf = str_replace('h','',$inf);
			$inf = ($inf . 'h');
		}elseif($dice1 == 3){
			$log = ($log . "“呜嘛呜——！”<br>被怪人打中了，<span class=\"red\">受到{$dice2}点伤害</span>！<BR>");
			$hp-=$dice2;
		}elseif($rp <=45){
			$log = ($log . "“呜嘛呜——！”<br>怪人给了你一个钱包！里面有<span class=\"red\">{$dice2}个10元面值的硬币</span>！<BR>");
			$money = $money + $dice2 * 10;
			$rp = $rp + 15;
		}else{
			$log = ($log . "呼，总算逃脱了。<BR>");
		}
	} elseif($pls == 3) { //雪之镇
		if($rp <=70){
			$log = ($log . "突然，一位拿着纸袋的少女向你撞来！<BR>");
			if($dice1 == 2){
			$log = ($log . "你身体一侧，成功回避了被撞倒的厄运。<BR>你看着少女面朝下重重地摔在地上，转头走开了。<BR>");
			$rp = $rp + 40;
			}
			else{
			$log = ($log . "你回避不及，被少女撞个正着！<BR>你面朝下地重重地摔在地上。");
			$inf = str_replace('h','',$inf);
			$inf = ($inf . 'h');	
			$rp = $rp + 25;
			$log = ($log . "不过知道少女不是故意找茬后，<BR>你原谅了她，并且和她分享了雕鱼烧，你感觉全身舒畅。");
			$hp = $mhp;
			$sp = $msp;
			}
		}else{
			$log = ($log . "突然，一位少女向你撞来！<BR>");
			if($dice1 == 2){
			$log = ($log . "你身体一侧，成功回避了被撞倒的厄运。<BR>你看着少女面朝下重重地摔在地上，转头走开了。<BR>");
			$rp = $rp + 40;
			}
			else{
			$log = ($log . "你回避不及，被少女撞个正着！<BR>你面朝下地重重地摔在地上。");
			$inf = str_replace('h','',$inf);
			$inf = ($inf . 'h');	
			$rp = $rp - 5;
			}
		}		
	} elseif($pls == 4) { //索拉利斯
	} elseif($pls == 5) { //指挥中心
	} elseif($pls == 6) { //梦幻馆
	} elseif($pls == 7) { //清水池
		$log = ($log . "糟糕，脚下滑了一下！<BR>");
		if($dice1 <= 3){
			$dice2 += 10;
			if($sp <= $dice2){
				$dice2 = $sp-1;
			}
			$sp-=$dice2;
			$log = ($log . "你摔进了池里！<BR>从水池里爬出来<span class=\"red\">消耗了{$dice2}点体力</span>。<BR>");
		}else{
			$log = ($log . "万幸，你没跌进池中。<BR>");
		}
	} elseif($pls == 8) { //白穗神社
	} elseif($pls == 9) { //墓地
	} elseif($pls == 10) { //麦斯克林
	} elseif($pls == 11) { //央中电视台 - 现对天使用作战本部
		$log = ($log . "哇！一个大锤向你锤来！<BR>");
		if($dice1 == 2){
			$log = ($log . "大锤重重地<span class=\"red\">砸到了腿上</span>，好疼！<BR>");
			$inf = str_replace('f','',$inf);
			$inf = ($inf . 'f');
		}elseif($dice1 == 3){
			$log = ($log . "你被击飞出了窗外，<span class=\"red\">受到{$dice2}点伤害</span>！<BR>");
			$hp-=$dice2;
		}else{
			$log = ($log . "你勉强躲过了大锤的攻击。<BR>");
		}
	} elseif($pls == 12) { //夏之镇
		$log = ($log . "突然，天空出现一大群乌鸦！<BR>");
		if($dice1 == 2){
			$log = ($log . "被乌鸦袭击，<span class=\"red\">头部受了伤</span>！<BR>");
			$inf = str_replace('h','',$inf);
			$inf = ($inf . 'h');
		}elseif($dice1 == 3){
			$log = ($log . "被乌鸦袭击，<span class=\"red\">受到{$dice2}点伤害</span>！<BR>");
			$hp-=$dice2;
		}else{
			$log = ($log . "呼，总算击退了。<BR>");
		}
	} elseif($pls == 13) { //三体星
	} elseif($pls == 14) { //光坂高校
	} elseif($pls == 15) { //守矢神社
		$log = ($log . "突然有妖怪袭击你！<BR>");
		if($dice1 == 2){
			$log = ($log . "被妖怪吓着了！你惊慌中<span class=\"red\">撞伤了自己的头部</span>！<BR>");
			$inf = str_replace('h','',$inf);
			$inf = ($inf . 'h');
		}elseif($dice1 == 3){
			$log = ($log . "妖怪的弹幕使你<span class=\"red\">受到{$dice2}点伤害</span>！<BR>");
			$hp-=$dice2;
		}else{
			$log = ($log . "呼，所谓妖怪不过是个撑着紫伞的少女而已，没什么可害怕的。<BR>");
		}
	} elseif($pls == 16) { //常磐森林
		$log = ($log . "野生的皮卡丘从草丛中钻出来了！<BR>");
		if($dice1 == 2){
			$log = ($log . "皮卡丘使用了电击！<span class=\"red\">手臂被击伤了</span>！<BR>");
			$inf = str_replace('a','',$inf);
			$inf = ($inf . 'a');
		}elseif($dice1 == 3){
			$log = ($log . "皮卡丘使用了电光石火！<span class=\"red\">受到{$dice2}点伤害</span>！<BR>");
			$hp-=$dice2;
		}else{
			$log = ($log . "成功地逃跑了。<BR>");
		}
	} elseif($pls == 17) { //常磐台中学
	} elseif($pls == 18) { //秋之镇
		$log = ($log . "突然，天空出现一大群乌鸦！<BR>");
		if($dice1 == 2){
			$log = ($log . "被乌鸦袭击，<span class=\"red\">头部受了伤</span>！<BR>");
			$inf = str_replace('h','',$inf);
			$inf = ($inf . 'h');
		}elseif($dice1 == 3){
			$log = ($log . "被乌鸦袭击，<span class=\"red\">受到{$dice2}点伤害</span>！<BR>");
			$hp-=$dice2;
		}else{
			$log = ($log . "呼，总算击退了。<BR>");
		}

	} elseif($pls == 19) { //精灵中心
	} elseif($pls == 20) { //春之镇
	} elseif($pls == 21) { //圣Gradius学园
		global $gamestate;
		if($gamestate < 50){
			$log = ($log . "隶属于时空部门G的特殊部队『天使』正在实弹演习！<BR>你被卷入了弹幕中！<BR>");
			if($dice1 <= 1 ){
				$log = ($log . "在弹幕的狂风中，你有惊无险地回避着弹幕，总算擦弹成功了。<BR>");
				if($dice2 == 40 && $rp > 40){
					$log = ($log . "咦，头顶上……好像有一名少女被弹幕击中了……？<BR>“对不起、对不起！”伴随着焦急的道歉声，少女以及她乘坐的机体向你笔直坠落下来。<br>你还来不及反应，重达数十吨的机体便直接落在了你的头上。<br>");
					include_once GAME_ROOT . './include/state.func.php';
					death('gradius');
					return;
				}
				elseif($dice2 == 30){
				$log = ($log . "接下来你看见驾驶着棕色机体的少女向你飞来。<BR>“实在对不起，我们看起来没有放假的时候啊。危险躲藏在每个大意之中不是么？”<br>她扔给了你些什么东西，貌似是面额为573的『纸币』？<br>“祝你好运！”少女这么说完就飞走了。");
				$money = $money + 573;
				$rp = $rp + 100;
				}
			}
			else{
				$log = ($log . "在弹幕的狂风中，你徒劳地试图回避弹幕……<BR>擦弹什么的根本做不到啊！<BR>你被少女们打成了筛子！<BR>");
				global $infwords;
				$infcache = '';
				foreach(Array('h','b','a','f') as $value){
					$dice3=rand(0,10);
					if($dice3<=6){
						$inf = str_replace($value,'',$inf);
						$infcache .= $value;
						$log .= "<span class=\"red\">弹幕造成你{$infwords[$value]}了！</span><br />";
					}
				}
				if(empty($infcache)){
					$inf = str_replace('b','',$inf);
					$inf .= 'b';
					$log .= "<span class=\"red\">弹幕造成你胸部受伤了！</span><br />";
				} else {$inf .= $infcache;}
	//			$inf = str_replace('h','',$inf);
	//			$inf = str_replace('b','',$inf);
	//			$inf = str_replace('a','',$inf);
	//			$inf = str_replace('f','',$inf);
	//			$inf = ($inf . 'hbaf');
				if($dice2 >= 39){
					$log = ($log . "并且，少女们的弹幕击中了要害！<BR><span class=\"red\">你感觉小命差点就交代在这里了</span>。<BR>");
					$hp = 1;
				}
				elseif($dice2 >= 36){
					$log = ($log . "并且，黑洞激光造成你<span class=\"clan\">冻结</span>了！<BR>");
					$inf = str_replace('i','',$inf);
					$inf = ($inf . 'i');
				}
				elseif($dice2 >= 32){
					$log = ($log . "并且，环形激光导致你<span class=\"red\">烧伤</span>了！<BR>");
					$inf = str_replace('u','',$inf);
					$inf = ($inf . 'u');
				}
				elseif($dice2 >= 27){
					$log = ($log . "并且，精神震荡弹导致你<span class=\"yellow\">全身麻痹</span>了！<BR>");
					$inf = str_replace('e','',$inf);
					$inf = ($inf . 'e');
				}
				elseif($dice2 >= 23){
					$log = ($log . "并且，音波装备导致你<span class=\"grey\">混乱</span>了！<BR>");
					$inf = str_replace('w','',$inf);
					$inf = ($inf . 'w');
				}
				else{
					$log = ($log . "并且，干扰用强袭装备导致你<span class=\"purple\">中毒</span>了！<BR>");
					$inf = str_replace('p','',$inf);
					$inf = ($inf . 'p');
				}
				$log = ($log . "你遍体鳞伤、连滚带爬地逃走了。<BR>");
			}
		} else {
			$log = ($log . "特殊部队『天使』的少女们不知道去了哪里。<BR>");
		}
	} elseif($pls == 22) { //初始之树
	} elseif($pls == 23) { //幻想世界
	} elseif($pls == 24) { //永恒的世界
	} elseif($pls == 25) { //妖精驿站
	} elseif($pls == 26) { //键刃墓场
	} elseif($pls == 27) { //花菱商厦
	} elseif($pls == 28) { //FARGO前基地
	} elseif($pls == 29) { //风祭森林
	} elseif($pls == 30) { //移动机库
	} elseif($pls == 31) { //太鼓实验室
	} elseif($pls == 32) { //SCP实验室
	} elseif($pls == 33) { //雏菊之丘
		 $dice=rand(0,10);
		if ($dice < 3){
			if ($rp < 40){
			$log = ($log . "少女抬头看了你一眼，随后低下头去继续她的研究。<BR>");
			}elseif ($rp < 550){
			$log = ($log . "少女抬头看了你一眼，貌似对你的举动很感兴趣的样子。<BR>");
			$rp = $rp + 50;			
			}elseif ($rp > 550 && $killnum = 0){
			$log = ($log . "少女向你扔来一个保温瓶。<BR>里面是类似于咖啡的液体；<BR>你喝了一口，感觉味道不怎么样。<BR>");
			$rp = $rp + 75;
			$hp = $mhp;
			$msp = $msp + 100;
			$sp = $msp;			
			}elseif ($rp < 1000){
			$log = ($log . "不知道为什么，你觉得双腿一软……<BR>");
			$hp = $hp - 200;
			$sp = 17;
			}elseif ($rp < 5000){
			$log = ($log . "看见少女离开了，你好奇地向少女身下的那幅不明『绘卷』上看去……<BR>");
			$hp = 1;
			$sp = 1;
			$inf = str_replace('h','',$inf);
			$inf = str_replace('b','',$inf);
			$inf = str_replace('a','',$inf);
			$inf = str_replace('f','',$inf);
			$inf = ($inf . 'hbaf');
			$log = ($log . "不能承受绘卷上所述的知识量，你浑身冒血连滚带爬地逃走了。<BR>");
			}elseif ($rp > 5000){
			$log = ($log . "从少女的身上延伸出了红色的丝带，<BR>朝你飞来。<BR>");
			include_once GAME_ROOT . './include/state.func.php';
			death('kagari3');
			return;
			}else{
			$log = ($log . "少女抬头看了你一眼，随后低下头去继续她的研究。<BR>");
			}
		}elseif ($dice < 6){
			if ($rp < 40){
			$log = ($log . "少女抬头看了你一眼，貌似对你的举动很感兴趣的样子。<BR>");
			$rp = $rp + 25;
			}elseif ($rp < 550){
			$log = ($log . "不知道为什么，你觉得双腿一软……<BR>");
			$sp = $sp - 200;			
			}elseif ($rp > 550 && $killnum = 0){
			$log = ($log . "少女的丝带飞到你的面前，<BR>在你的脸上重重地刮了一下。<BR>");
			$inf = str_replace('e','',$inf);
			$inf = ($inf . 'e');
			}elseif ($rp < 1000){
			$log = ($log . "从少女的身上延伸出了红色的丝带，<BR>将你紧紧地捆住。<BR>");
			include_once GAME_ROOT . './include/state.func.php';
			death('kagari1');
			return;			
			}elseif ($rp < 5000){
			$log = ($log . "从少女的身上延伸出了红色的丝带，<BR>丝带朝着你的头部飞去。<BR>");
			include_once GAME_ROOT . './include/state.func.php';
			death('kagari2');
			return;			
			}elseif ($rp > 5000){
			$log = ($log . "从少女的身上延伸出了红色的丝带，<BR>丝带朝着你飞去。<BR>");
			include_once GAME_ROOT . './include/state.func.php';
			death('kagari3');
			return;			
			}else{
			$log = ($log . "少女抬头看了你一眼，随后低下头去继续她的研究。<BR>");
			}		
		}elseif ($dice < 9){
			if ($rp < 40){
			$log = ($log . "少女抬头开始注意你的一举一动。<BR>");
			$rp = $rp + 200;
			}elseif ($rp < 550){
			$log = ($log . "少女向你扔来一个保温瓶。<BR>里面是奇怪的深色液体；<BR>你喝了一口，感觉体内有一种力量涌出来。<BR>");
			$mhp = $mhp + 150;
			$rp = $rp + 350;
			}elseif ($rp > 550 && $killnum = 0){
			$log = ($log . "你小心翼翼地在少女旁边坐下，（竟然没被她赶走！）<BR>看着她身下的『绘卷』<BR>");
			$mhp = 400;
			$msp = 400;
			$hp = 200;
			$sp = 200;
			$log = ($log . "当你觉得你看懂了点什么的时候<BR>只见少女用惊讶的眼光盯着你。<BR>这时你才发现你已经七窍流血。<BR>");
			$wp = $wp + 150;
			$wk = $wk + 150;
			$wg = $wg + 150;
			$wc = $wc + 150;
			$wd = $wd + 150;
			$wf = $wf + 150;
			}elseif ($rp < 1000){
			$log = ($log . "你小心翼翼地在少女旁边坐下，想看看她身下的『绘卷』<BR>结果被红色的丝带正中腿部。<BR>");
			$hp = 200;
			$sp = 200;
			$inf = str_replace('f','',$inf);
			$inf = ($inf . 'f');
			$log = ($log . "你龇牙咧嘴地逃走了。<BR>");			
			}elseif ($rp < 5000){
			$log = ($log . "从少女的身上延伸出了红色的丝带，<BR>将你紧紧地捆住。<BR>");
			include_once GAME_ROOT . './include/state.func.php';
			death('kagari1');
			return;			
			}elseif ($rp > 5000){
			$log = ($log . "从少女的身上延伸出了红色的丝带，<BR>丝带朝着你的头部飞去。<BR>");
			include_once GAME_ROOT . './include/state.func.php';
			death('kagari2');
			return;			
			}else{
			$log = ($log . "少女抬头看了你一眼，随后低下头去继续她的研究。<BR>");
			}		
		}else{
			if ($rp < 40){
			$log = ($log . "少女飘了起来，并且跟在了你的后面，<BR>太可怕了，还是赶快离开为妙！<BR>");
			$rp = $rp + 1500;
			}elseif ($rp < 550){
			$log = ($log . "少女瞪了你一眼，你感觉你的生命力被抽干了，<BR>太可怕了，还是赶快离开为妙！<BR>");
			$hp = 1;
			$sp = 1;
			$rp = $rp - 200;
			}elseif ($rp > 550 && $killnum = 0){
			$log = ($log . "少女瞪了你一眼，你感觉头晕目眩，<BR>太可怕了，还是赶快离开为妙！<BR>");
			$wp = $wk = $wg = $wc = $wd = $wf = 0;
			$rp = $rp - 200;
			}elseif ($rp < 1000){
			$log = ($log . "少女瞪了你一眼，你被一种无形的压力直接压在了地上，<BR>太可怕了，还是赶快离开为妙！<BR>");
			$mhp = $msp = 100;
			$rp = $rp - 200;
			}elseif ($rp < 5000){
			$log = ($log . "从少女的身上延伸出了红色的丝带，<BR>将你紧紧地捆住。<BR>");
			include_once GAME_ROOT . './include/state.func.php';
			death('kagari1');
			return;
			}elseif ($rp > 5000){
			$log = ($log . "从少女的身上延伸出了红色的丝带，<BR>丝带朝着你的头部飞去。<BR>");
			include_once GAME_ROOT . './include/state.func.php';
			death('kagari2');
			return;
			}else{
			$log = ($log . "少女抬头看了你一眼，随后低下头去继续她的研究。<BR>");
			}		
		}
	} else {
	}

	if($hp<=0){
//		global $now,$alivenum,$deathnum,$name,$state;
//		$hp = 0;
//		$state = 13;
//		naddnews($now,'death13',$name,0);
//		$alivenum--;
//		$deathnum++;
//		include_once GAME_ROOT.'./include/system.func.php';
//		save_gameinfo();
		include_once GAME_ROOT . './include/state.func.php';
		death('event');
	}
	return;
}

?>