<? return function ($site, $pages, $page) {
  return [
    'update' => page('news')->children()->sortBy('date', 'desc')->first()
  ];
};
