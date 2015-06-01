<? class R62 {
  public static function body_classes () {
    $classes = [
      page()->uid(),
      page()->template()
    ];

    # Filter out number-only classes:
    $classes = array_filter($classes, function($class) {
      return !preg_match('/^\d+$/', $class);
    });

    return join($classes, ' ');
  }

  public static function link_for ( $page, $title ) {
  return html::a($page->url(), $title, ['class' => ($page->isOpen() ? 'active' : null)]);
  }
}
