<?php if(!defined('IN_GAME')) exit('Access Denied'); ?>
<p><span class="lime">BOSS NPC简介</span>：</p>
此类NPC对玩家<span class="yellow">均有较大威胁</span>，在<span class="yellow">没有足够高的防御</span>的情况下，请<span class="yellow">尽可能避免和它们的接触</span>，也<span class="yellow">不要贸然攻击它们</span>，否则很可能导致自己被击杀。<br>
当然，如果成功击杀了这些NPC，它们也会掉落<span class="lime">大量有用的道具或金钱</span>。<br>
<br>
<?php if(is_array($ty1)) { foreach($ty1 as $vkind => $kind) { include template('npcinfohelp'); } } ?>
<br>
<p><span class="lime">真职人 NPC简介</span>：</p>
此类NPC在开局对<span class="yellow">无防具的玩家有较大威胁</span>，这类NPC的特点是<span class="yellow">防御非常高</span>，且<span class="yellow">武器均带有“电击+冻气+带毒+火焰+音波”属性</span>，很容易导致玩家中异常状态。<br>如果防具很差，或没有属性防御也没钱买药剂，请不要贸然攻击它们，否则很可能导致自己中大量异常状态后难以恢复，苦不堪言。<br>
当然，击杀这些NPC后可以获取<span class="lime">极为优秀的防具</span>，在游戏中后期<span class="lime">击杀它们并拾取它们的防具保护自己</span>往往是玩家取胜的关键。<br>
<br>
<?php if(is_array($ty2)) { foreach($ty2 as $vkind => $kind) { include template('npcinfohelp'); } } ?>
<br>
<p><span class="lime">全息幻想NPC、小兵NPC 简介</span>：</p>
此类NPC对玩家基本无威胁，是玩家<span class="yellow">最主要的熟练度、经验来源，也是最主要的击杀对象</span>。每个小兵NPC掉落金钱220元，是玩家<span class="lime">主要金钱来源</span>。<br>全息幻象掉落<span class="lime">更多的金钱</span>以及<span class="lime">各系优秀的武器或强化道具</span>，往往是<span class="yellow">拉开玩家差距、建立优势乃至取得最终胜利的关键</span>。<br>
<br>
<?php if(is_array($ty3)) { foreach($ty3 as $vkind => $kind) { include template('npcinfohelp'); } } ?>
<br>
<p><span class="lime">特殊NPC 简介</span>：</p>
此类NPC对玩家无威胁，但当玩家击杀它们后，它们会变身为<span class="yellow">“第二形态”</span>，此时<span class="yellow">攻击力会变得极强</span>。<br>可别不小心击杀了它们后被第二形态秒杀哦～ 不过，当自己处于劣势时，偷偷击杀这类NPC，并期望对手撞上它们并被它们秒杀，也是不错的翻盘思路哦～<br>
<br>
<?php if(is_array($ty4)) { foreach($ty4 as $vkind => $kind) { include template('npcinfohelp'); } } ?>
<br>
