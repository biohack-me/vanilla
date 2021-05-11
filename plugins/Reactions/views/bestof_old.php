<?php if (!defined('APPLICATION')) exit(); ?>
<style>
   .CountItemWrap {
      width: <?php echo round(100 / (2 + count($this->data('ReactionTypes', [])))).'%'; ?>
   }
</style>

<?php
include_once 'reaction_functions.php';

function reactionFilterButton($name, $code, $currentReactionType) {
   $lCode = strtolower($code);
   $url = url("/bestof/$lCode");
   $imgSrc = "https://badges.v-cdn.net/reactions/50/$lCode.png";
   $cssClass = '';
   if ($currentReactionType == $lCode)
      $cssClass .= ' Selected';

   $result = <<<EOT
<div class="CountItemWrap">
<div class="CountItem$cssClass">
   <a href="$url">
      <span class="CountTotal"><img src="$imgSrc" loading="lazy" /></span>
      <span class="CountLabel">$name</span>
   </a>
</div>
</div>
EOT;

   return $result;
}

echo wrap($this->data('Title'), 'h1 class="H"');

echo '<div class="DataCounts">';
   $CurrentReactionType = $this->data('CurrentReaction');
   echo reactionFilterButton(t('Everything'), 'Everything', $CurrentReactionType);
   $ReactionTypeData = $this->data('ReactionTypes');
   foreach ($ReactionTypeData as $Key => $ReactionType) {
      echo reactionFilterButton(t(getValue('Name', $ReactionType, '')), getValue('UrlCode', $ReactionType, ''), $CurrentReactionType);
   }
echo '</div>
   
<div class="BestOfData">';
include_once('datalist.php');
echo '</div>';
