<div class="sidebar-speakers">
  <h6>Years</h6>
  <ul>
    <? foreach ( $years as $year => $speakers ) { ?>
      <li><?= html::a('#year-' . $year, $year) ?></li>
    <? } ?>
  </ul>
</div>
