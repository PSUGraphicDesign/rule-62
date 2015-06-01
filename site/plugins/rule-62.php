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

  public static function speakers_by_year () {
    # Fetch speakers, and sort them, most recent first.
    $speakers = page('speakers')->children()->sortBy('date', 'desc');

    # Initialize an empty container for years
    $years = [];

    # Assign a speaker to a year key
    foreach ( $speakers as $speaker ) {
      $years[$speaker->date('Y')][] = $speaker;
    }

    # They should be in order, but just in case, sort the year keys.
    krsort($years);

    # Return separately, becayse krsort returns a boolean success, not the array
    return $years;
  }
}
