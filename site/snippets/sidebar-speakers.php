<div class="sidebar-speakers">
  <h4>Years</h4>
  <ul>
    <? foreach ( $years as $year => $speakers ) { ?>
      <li><?= html::a('#year-' . $year, $year) ?></li>
    <? } ?>
  </ul>
</div>
