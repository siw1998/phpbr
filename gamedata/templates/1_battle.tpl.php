<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
<table border="0" width=640px height=320px cellspacing="0" cellpadding="0"  valign="middle">
<TR align="center" >
<TD valign="middle" class="b5">
<TABLE border="0" width=640px align="center"  cellspacing="0" cellpadding="0"  class="battle">
<tr><td>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr><td>
<table border="0"  cellspacing="0" cellpadding="0" valign="top">
<tr>
<td class="b1" colspan=2 width=140px height=20px><div class=nttx>Lv. <?=$w_lvl?></div></td>

<td class="b1" colspan=2 width=150px><div class=nttx><?=$w_name?></div></td>

<td class="b1" colspan=2 width=190px><div class=nttx><?=$w_sNoinfo?></div></td>

<td class="b5" rowspan=4 colspan=1 width=140px height=80px><IMG src="img/<?=$w_iconImg?>" height=80px border="0" align="middle" 
<? if($w_hp==0) { ?>
style="filter:Xray()"
<? } ?>
 /></td>
</tr>
<tr>
<td class="b2" width=65px height=20px><div class=nttx>怒气</div></td>
<td class="b3" width=70px><div class=nttx><?=$w_ragestate?></div></td>
<td class="b2" width=65px><div class=nttx>体力</div></td>
<td class="b3" width=80px><div class=nttx><?=$w_spstate?></div></td>
<td class="b2" width=65px><div class=nttx>生命</div></td>
<td class="b3" width=120px><div class=nttx><?=$w_hpstate?></div></td>
</tr>
<tr>
<td class="b2" height=20px><div class=nttx>武器攻击</div></td>
<td class="b3"><div class=nttx><?=$w_wepestate?></div></td>
<td class="b2"><div class=nttx>武器种类</div></td>
<td class="b3"><div class=nttx>
<? if($w_wepk != '') { ?>
<?=$iteminfo[$w_wepk]?>
<? } else { ?>
？？？
<? } ?>
</div></td>
<td class="b2"><div class=nttx>武器</div></td>
<td class="b3"><div class=nttx><?=$w_wep?></div></td>
</tr>
<tr>
<td class="b2" height=20px><div class=nttx>应战策略</div></td>
<td class="b3"><div class=nttx>
<? if($w_tactic >= 0) { ?>
<?=$tacinfo[$w_tactic]?>
<? } else { ?>
？？？
<? } ?>
</div></td>
<td class="b2"><div class=nttx>基础姿态</div></td>
<td class="b3"><div class=nttx>
<? if($w_pose >= 0) { ?>
<?=$poseinfo[$w_pose]?>
<? } else { ?>
？？？
<? } ?>
</div></td>
<td class="b2"><div class=nttx>受伤部位</div></td>
<td class="b3"><div class=nttx>
<? if($w_infdata) { ?>
<?=$w_infdata?>
<? } else { ?>
无
<? } ?>
</div></td>

</tr>
</table>
</td></tr>
</table>
</td></TR>
<tr>
<TD class="b3" height=160px><DIV class=nttx><B><FONT color="#ff0000" size="5" face="黑体"><?=$battle_title?></FONT></B></div></TD>
</TR>
<tr><td>
<table border="0" width=640px cellspacing="0" cellpadding="0" valign="middle">
<tr>
<td class="b5" rowspan=4 colspan=1 width=140px height=80px><IMG src="img/<?=$iconImg?>" height=80px border="0" align="middle" 
<? if($hp==0) { ?>
style="filter:Xray()"
<? } ?>
 /></td>
<td class="b1" colspan=2 width=190px height=20px><div class=nttx><?=$typeinfo[$type]?>(<?=$sexinfo[$gd]?><?=$sNo?>号)</div></td>

<td class="b1" colspan=2 width=150px><div class=nttx><?=$name?></div></td>

<td class="b1" colspan=2 width=140px><div class=nttx>Lv. <?=$lvl?></div></td>


</tr>
<tr>
<td class="b2" width=65px height=20px><div class=nttx>生命</div></td>
<td class="b3" width=120px><div class=nttx><span class="<?=$hpcolor?>"><?=$hp?> / <?=$mhp?></span></div></td>
<td class="b2" width=65px><div class=nttx>体力</div></td>
<td class="b3" width=80px><div class=nttx><?=$sp?> / <?=$msp?></div></td>
<td class="b2" width=65px><div class=nttx>怒气</div></td>
<td class="b3" width=70px><div class=nttx>
<? if($rage >=30) { ?>
<span class="yellow"><?=$rage?></span>
<? } else { ?>
<?=$rage?>
<? } ?>
</div></td>
</tr>
<tr>
<td class="b2" height=20px><div class=nttx>武器</div></td>
<td class="b3"><div class=nttx><?=$wep?></div></td>
<td class="b2"><div class=nttx>武器种类</div></td>
<td class="b3"><div class=nttx><?=$iteminfo[$wepk]?></div></td>
<td class="b2"><div class=nttx>武器攻击</div></td>
<td class="b3"><div class=nttx><?=$wepe?></div></td>
</tr>
<tr>
<td class="b2" height=20px><div class=nttx>受伤部位</div></td>
<td class="b3"><div class=nttx>
<? if($infdata) { ?>
<?=$infdata?>
<? } else { ?>
无
<? } ?>
</div></td>
<td class="b2"><div class=nttx>基础姿态</div></td>
<td class="b3"><div class=nttx><?=$poseinfo[$pose]?></div></td>
<td class="b2"><div class=nttx>应战策略</div></td>
<td class="b3"><div class=nttx><?=$tacinfo[$tactic]?></div></td>

</tr>
</table>
</td></tr>
</TABLE>
</TD>
</TR>
</table>
