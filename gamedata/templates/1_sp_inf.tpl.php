<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
想要做什么？<br>

<input type="hidden" name="mode" value="special">
<input type="radio" name="command" id="menu" value="menu" checked><a onclick=sl('menu'); href="javascript:void(0);" >返回</a><br><br>
<? if((strpos($inf,'h') !== false || strpos($inf,'b') !== false || strpos($inf,'a') !== false || strpos($inf,'f') !== false) && $club == 16) { ?>
<input type="radio" name="command" id="infA" value="infA"><a onclick=sl('infA'); href="javascript:void(0);" ><span class="red">包扎全身伤口</span></a><br>
<? } if(strpos($inf,'b') !== false) { ?>
<input type="radio" name="command" id="infb" value="infb"><a onclick=sl('infb'); href="javascript:void(0);" >包扎<?=$infinfo['b']?><span class="red">部</span>伤口</a><br>
<? } if(strpos($inf,'h') !== false) { ?>
<input type="radio" name="command" id="infh" value="infh"><a onclick=sl('infh'); href="javascript:void(0);" >包扎<?=$infinfo['h']?><span class="red">部</span>伤口</a><br>
<? } if(strpos($inf,'a') !== false) { ?>
<input type="radio" name="command" id="infa" value="infa"><a onclick=sl('infa'); href="javascript:void(0);" >包扎<?=$infinfo['a']?><span class="red">部</span>伤口</a><br>
<? } if(strpos($inf,'f') !== false) { ?>
<input type="radio" name="command" id="inff" value="inff"><a onclick=sl('inff'); href="javascript:void(0);" >包扎<?=$infinfo['f']?><span class="red">部</span>伤口</a><br>
<? } if(strpos($inf,'p') !== false && $club == 16) { ?>
<input type="radio" name="command" id="infp" value="infp"><a onclick=sl('infp'); href="javascript:void(0);" >治疗<?=$exdmginf['p']?>状态</a><br>
<? } if(strpos($inf,'u') !== false && $club == 16) { ?>
<input type="radio" name="command" id="infu" value="infu"><a onclick=sl('infu'); href="javascript:void(0);" >治疗<?=$exdmginf['u']?>状态</a><br>
<? } if(strpos($inf,'i') !== false && $club == 16) { ?>
<input type="radio" name="command" id="infi" value="infi"><a onclick=sl('infi'); href="javascript:void(0);" >治疗<?=$exdmginf['i']?>状态</a><br>
<? } if(strpos($inf,'e') !== false && $club == 16) { ?>
<input type="radio" name="command" id="infe" value="infe"><a onclick=sl('infe'); href="javascript:void(0);" >治疗<?=$exdmginf['e']?>状态</a><br>
<? } if(strpos($inf,'w') !== false && $club == 16) { ?>
<input type="radio" name="command" id="infw" value="infw"><a onclick=sl('infw'); href="javascript:void(0);" >治疗<?=$exdmginf['w']?>状态</a><br>
<? } ?>
 

