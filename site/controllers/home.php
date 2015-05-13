<? return function ($site, $pages, $page) {
  return [
    'updates' => page('news')->children()->filter(function ($update) {
      $programs = $update->program()->split();
      return in_array('Rule62', $programs);
    })->sortBy('date', 'desc')
  ];
};
