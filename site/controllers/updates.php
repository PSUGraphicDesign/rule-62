<? return function ($site, $pages, $page) {
  return [
    'updates' => $page->children()->sortBy('date', 'desc')
  ];
};
