<? return function ($site, $pages, $page) {
  return [
    'updates' => $page->visibleChildren()->sortBy('date', 'desc')
  ];
};
