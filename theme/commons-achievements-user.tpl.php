<?php
/**
 * @file
 * Commons achievements theme for user block
 *
 * Available variables:
 * - $badges: A render array of badges.
 * - $stats: A render array of statistics.
 * - $path: An optional link path.
 */
?>
<div class="achievement-badges">
  <?php foreach ($badges as $badge): ?>
    <div class="achievement-badge">
      <div class="inner">
        <a href="<?php print $badge['path']; ?>">
          <?php print render($badge); ?>
          <span class="achievement-title"><?php print $badge['title']; ?></span>
        </a>
      </div>
    </div>
  <?php endforeach; ?>
  <?php if(empty($badges)): ?>
    <p>You have not earned any achievements.</p>
  <?php endif; ?>
</div>
<div class="achievement-stats clearfix">
  <h2 class="block-title">Statistics</h2>
  <?php foreach ($stats as $name => $stat): ?>
    <div class="achievement-stat <?php print implode($stat['#attributes']['class']); ?>">
      <div class="inner">
        <?php if (!empty($stat['path'])): ?>
        <a href="<?php print $stat['path']; ?>">
          <?php endif; ?>

          <span class="count"><?php print $stat['count']; ?></span>
          <span class="suffix"><?php print $stat['#suffix']; ?></span>

          <?php if (!empty($stat['path'])): ?>
        </a>
      <?php endif; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>
