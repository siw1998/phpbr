<? if(!defined('IN_GAME')) exit('Access Denied'); ?>
想要从尸体上拾取什么？<br><br>
<input type="hidden" name="mode" value="corpse">
<input type="radio" name="command" id="menu" value="menu" 
<? if(!$w_money) { ?>
checked
<? } ?>
><a onclick=sl('menu'); href="javascript:void(0);" >返回</a><br><br>
<? if($w_weps && $w_wepe) { ?>
<input type="radio" name="command" id="wep" value="wep"><a onclick=sl('wep'); href="javascript:void(0);" ><?=$w_wep?>/<?=$w_wepk_words?>/<?=$w_wepe?>/<?=$w_weps?>
<? if($w_wepsk_words) { ?>
/<?=$w_wepsk_words?>
<? } ?>
</a><br>
<? } if($w_arbs && $w_arbe) { ?>
<input type="radio" name="command" id="arb" value="arb"><a onclick=sl('arb'); href="javascript:void(0);" ><?=$w_arb?>/<?=$w_arbk_words?>/<?=$w_arbe?>/<?=$w_arbs?>
<? if($w_arbsk_words) { ?>
/<?=$w_arbsk_words?>
<? } ?>
</a><br>
<? } if($w_arhs) { ?>
<input type="radio" name="command" id="arh" value="arh"><a onclick=sl('arh'); href="javascript:void(0);" ><?=$w_arh?>/<?=$w_arhk_words?>/<?=$w_arhe?>/<?=$w_arhs?>
<? if($w_arhsk_words) { ?>
/<?=$w_arhsk_words?>
<? } ?>
</a><br>
<? } if($w_aras) { ?>
<input type="radio" name="command" id="ara" value="ara"><a onclick=sl('ara'); href="javascript:void(0);" ><?=$w_ara?>/<?=$w_arak_words?>/<?=$w_arae?>/<?=$w_aras?>
<? if($w_arask_words) { ?>
/<?=$w_arask_words?>
<? } ?>
</a><br>
<? } if($w_arfs) { ?>
<input type="radio" name="command" id="arf" value="arf"><a onclick=sl('arf'); href="javascript:void(0);" ><?=$w_arf?>/<?=$w_arfk_words?>/<?=$w_arfe?>/<?=$w_arfs?>
<? if($w_arfsk_words) { ?>
/<?=$w_arfsk_words?>
<? } ?>
</a><br>
<? } if($w_arts) { ?>
<input type="radio" name="command" id="art" value="art"><a onclick=sl('art'); href="javascript:void(0);" ><?=$w_art?>/<?=$w_artk_words?>/<?=$w_arte?>/<?=$w_arts?>
<? if($w_artsk_words) { ?>
/<?=$w_artsk_words?>
<? } ?>
</a><br>
<? } if($w_itms0) { ?>
<input type="radio" name="command" id="itm0" value="itm0"><a onclick=sl('itm0'); href="javascript:void(0);" ><?=$w_itm0?>/<?=$w_itmk0_words?>/<?=$w_itme0?>/<?=$w_itms0?>
<? if($w_itmsk0_words) { ?>
/<?=$w_itmsk0_words?>
<? } ?>
</a><br>
<? } if($w_itms1) { ?>
<input type="radio" name="command" id="itm1" value="itm1"><a onclick=sl('itm1'); href="javascript:void(0);" ><?=$w_itm1?>/<?=$w_itmk1_words?>/<?=$w_itme1?>/<?=$w_itms1?>
<? if($w_itmsk1_words) { ?>
/<?=$w_itmsk1_words?>
<? } ?>
</a><br>
<? } if($w_itms2) { ?>
<input type="radio" name="command" id="itm2" value="itm2"><a onclick=sl('itm2'); href="javascript:void(0);" ><?=$w_itm2?>/<?=$w_itmk2_words?>/<?=$w_itme2?>/<?=$w_itms2?>
<? if($w_itmsk2_words) { ?>
/<?=$w_itmsk2_words?>
<? } ?>
</a><br>
<? } if($w_itms3) { ?>
<input type="radio" name="command" id="itm3" value="itm3"><a onclick=sl('itm3'); href="javascript:void(0);" ><?=$w_itm3?>/<?=$w_itmk3_words?>/<?=$w_itme3?>/<?=$w_itms3?>
<? if($w_itmsk3_words) { ?>
/<?=$w_itmsk3_words?>
<? } ?>
</a><br>
<? } if($w_itms4) { ?>
<input type="radio" name="command" id="itm4" value="itm4"><a onclick=sl('itm4'); href="javascript:void(0);" ><?=$w_itm4?>/<?=$w_itmk4_words?>/<?=$w_itme4?>/<?=$w_itms4?>
<? if($w_itmsk4_words) { ?>
/<?=$w_itmsk4_words?>
<? } ?>
</a><br>
<? } if($w_itms5) { ?>
<input type="radio" name="command" id="itm5" value="itm5"><a onclick=sl('itm5'); href="javascript:void(0);" ><?=$w_itm5?>/<?=$w_itmk5_words?>/<?=$w_itme5?>/<?=$w_itms5?>
<? if($w_itmsk5_words) { ?>
/<?=$w_itmsk5_words?>
<? } ?>
</a><br>
<? } if($w_itms6) { ?>
<input type="radio" name="command" id="itm6" value="itm6"><a onclick=sl('itm6'); href="javascript:void(0);" ><?=$w_itm6?>/<?=$w_itmk6_words?>/<?=$w_itme6?>/<?=$w_itms6?>
<? if($w_itmsk6_words) { ?>
/<?=$w_itmsk6_words?>
<? } ?>
</a><br>
<? } if($w_money) { ?>
<input type="radio" name="command" id="money" value="money" checked><a onclick=sl('money'); href="javascript:void(0);" ><?=$w_money?> 元 </a><br>
<? } ?>
<input type="button" name="submit" value="提交" onclick="postCmd('gamecmd','command.php');this.disabled=true;">