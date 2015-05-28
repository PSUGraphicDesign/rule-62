<? return function ($site, $pages, $page) {
  return [
    'speakers' => $page->children()->sortBy('date', 'asort')
  ];
};
