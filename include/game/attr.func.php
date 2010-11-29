
<?php

if(!defined('IN_GAME')) {
	exit('Access Denied');
}

include_once config('combatcfg',$gamecfg);

/*
$poseinfo = Array('通常','攻击姿态','防守姿态','探索姿态','隐藏姿态','治疗姿态');
$tacinfo = Array('通常','','重视防御','重视反击','重视躲避',);

*/

//发现率修正 find_r,越大越容易发现目标
function get_find_r($weather = 0,$pls = 0,$pose = 0,$tactic = 0,$club = 0,$inf = ''){
	$_FIND = Array
		(
		weather => array(10,20,0,-2,-3,-7,-10,-5,10,0,0,-7,-5,-30),
		pls => array(10,0,0,10,-10,10,0,10,-10,0,10,0,0,-10,0,-10,-10,-10,0,10,0,10),
		pose => array(0,0,0,20,-10,-20),
		tactic => array(),
		);
	$find_r = 0;
	$find += $_FIND['pose'][$pose];
	$find += $_FIND['weather'][$weather];
	$find += $_FIND['pls'][$pls];
	
	return $find_r;
}
                                                            

//躲避率修正 hide_r,越大越不容易被发现
function get_hide_r($weather = 0,$pls = 0,$pose = 0,$tactic = 0,$club = 0,$inf = ''){
	$_HIDE = Array
		(
		weather => array(),
		pls => array(),
		pose => array(),
		tactic => array(0,-5,5,0,20,-10),
		);
	$hide_r = 0;
	$hide_r += $_HIDE['tactic'][$tactic];
	return $hide_r;
}
//先攻几率修正，越大越容易先攻                                                            
function get_active_r($weather = 0,$pls = 0,$pose = 0,$tactic = 0,$club = 0,$inf = ''){
	$_ACTIVE = Array
		(
		weather => array(20,10,0,-3,-5,-5,-7,10,-10,-10,-10,-5,0,-5),
		pls => array(),
		pose => array(0,0,-10,10,20,-20),
		tactic => array(),
		);
	$active_r = 0;
	$active_r += $_ACTIVE['weather'][$weather];
	$active_r += $_ACTIVE['pose'][$pose];
	
	return $active_r;
}
//命中率修正
function get_hitrate($wkind = 'N',$skill = 0,$club = 0,$inf = ''){
	global $hitrate_obbs,$hitrate_r,$weather;
	$hitrate = $hitrate_obbs[$wkind];
	if($wkind != 'C') {
		$hitrate += round($skill * $hitrate_r[$wkind]); 
		if(strpos($inf, 'h')!==false){$hitrate -= 20;}
		if($weather == 12){$hitrate += 20;}
	}
	return $hitrate;
}

//获取反击几率
function get_counter($wkind = 'N',$tactic = 0,$club = 0,$inf = ''){
	global $counter_obbs;
	$counter = $counter_obbs[$wkind];
	if($tactic == 4) {
		$counter = 0;
	} elseif($tactic == 3) {
		$counter += 20;
	}
	return $counter;
}
//攻击力修正，百分比增加
function get_attack_p($weather = 0,$pls = 0,$pose = 0,$tactic = 0,$club = 0,$inf = '',$active = 1){
	$_ATTACK = Array
		(
		weather => array(20,20,0,-20,-5,-7,-7,-10,0,5,20,-7,-20,-5),
		pls => array(0,0,0,0,0,0,10,0,0,-10,0,0,0,0,-10,0,0,0,10,0,0,0),
		pose => array(0,20,-20,-5,-20,-30),
		tactic => array(0,20,-20,5,-10,-30),
		);

	$attack = 100;
	$attack += $_ATTACK['weather'][$weather];
	$attack += $_ATTACK['pls'][$pls];
	if($active){$attack += $_ATTACK['pose'][$pose];}
	else{$attack += $_ATTACK['tactic'][$tactic];}
	if(strpos($inf,'a') !== false){$attack -= 20;}

	return $attack/100;
}
//防御力修正，百分比
function get_defend_p($weather = 0,$pls = 0,$pose = 0,$tactic = 0,$club = 0,$inf = '',$active = 1){
	$_DEFEND = Array
		(
		weather => array(30,10,0,-3,-3,-5,-10,-15,-20,-30,-50,-5,-20,-3),
		pls => array(0,-10,10,0,0,0,0,0,0,0,0,-10,10,0,0,0,0,0,0,0,10,0),
		pose => array(0,-20,20,-10,-5,-15),
		tactic => array(0,-20,20,-10,10,-5),
		);

	$defend = 100;
	$defend += $_DEFEND['weather'][$weather];
	$defend += $_DEFEND['pls'][$pls];
	if($active){$defend += $_DEFEND['pose'][$pose];}
	else{$defend += $_DEFEND['tactic'][$tactic];}
	if(strpos($inf,'b') !== false){$defend -= 20;}

	return $defend/100;
}


?>