<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
<input type="hidden" name="mode" value="command">
现在想要做什么？<br /><br />
<input type="radio" name="command" id="move" value="move" checked><a onclick=sl('move'); href="javascript:void(0);" ><select name="moveto">
<? include template('move'); ?>
</select></a><br />
<? if(array_search($pls,$arealist) > $areanum || $hack) { ?>
<input type="radio" name="command" id="search" value="search"><a onclick=sl('search'); href="javascript:void(0);" >搜寻</a><br />
<? } if($itms1) { ?>
&nbsp;<input type="radio" name="command" id="itm1" value="itm1"><a onclick=sl('itm1'); href="javascript:void(0);" ><?=$itm1?>/<?=$itme1?>/<?=$itms1?> 使用</a><br />
<? } if($itms2) { ?>
&nbsp;<input type="radio" name="command" id="itm2" value="itm2"><a onclick=sl('itm2'); href="javascript:void(0);" ><?=$itm2?>/<?=$itme2?>/<?=$itms2?> 使用</a><br />
<? } if($itms3) { ?>
&nbsp;<input type="radio" name="command" id="itm3" value="itm3"><a onclick=sl('itm3'); href="javascript:void(0);" ><?=$itm3?>/<?=$itme3?>/<?=$itms3?> 使用</a><br />
<? } if($itms4) { ?>
&nbsp;<input type="radio" name="command" id="itm4" value="itm4"><a onclick=sl('itm4'); href="javascript:void(0);" ><?=$itm4?>/<?=$itme4?>/<?=$itms4?> 使用</a><br />
<? } if($itms5) { ?>
&nbsp;<input type="radio" name="command" id="itm5" value="itm5"><a onclick=sl('itm5'); href="javascript:void(0);" ><?=$itm5?>/<?=$itme5?>/<?=$itms5?> 使用</a><br />
<? } ?>
<input type="radio" name="command" id="itemmain" value="itemmain"><a onclick=sl('itemmain'); href="javascript:void(0);" ><select name="itemcmd">
<option value="main">■ 道具 ■</option>
<option value="itemmix">道具合成</option>
<option value="itemdrop">道具丢弃</option>
<option value="itemmerge">整理包裹</option>
<option value="itemoff">卸下装备</option>
<!--除下各个部位，丢弃武器-->
</select></a>
<br />
<input type="radio" name="command" id="rest1" value="rest1"><a onclick=sl('rest1'); href="javascript:void(0);">睡眠</a>
<input type="radio" name="command" id="rest2" value="rest2"><a onclick=sl('rest2'); href="javascript:void(0);">治疗</a>
<? if($pls == 19) { ?>
<input type="radio" name="command" id="rest3" value="rest3"><a onclick=sl('rest3'); href="javascript:void(0);">静养</a>
<? } ?>
<br />
<input type="radio" name="command" id="special" value="special"><a onclick=sl('special'); href="javascript:void(0);" ><select name="sp_cmd">
<option value="main" selected>■ 特殊 ■</option>
<? if($pls == 0 || $pls == 14) { ?>
<option value="sp_shop">商　店</option>
<? } ?>
<option value="sp_pose">基础姿态</option>
<option value="sp_tac">应战策略</option>
<option value="sp_word">留言变更</option>
<option value="sp_inf">包扎伤口</option>
<? if($club == 8) { ?>
<option value="sp_poison">检查毒物</option>
<? } ?>
</select></a>
<br />
<? if($gamestate < 40) { ?>
<input type="radio" name="command" id="team" value="team"><a onclick=sl('team'); href="javascript:void(0);" ><select name="teamcmd">
<option value="main" selected>■ 队伍 ■</option>
<option value="teammake">组建队伍</option>
<option value="teamjoin">加入队伍</option>
<option value="teamquit">脱离队伍</option>
</select></a>
<? } ?>
