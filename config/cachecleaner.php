<?php
return [
  'CacheCleaner' => [
    'tasks' => ['CacheCleaner.Dir', 'CacheCleaner.Orm', 'CacheCleaner.Cake'],

    'Dir' => [
      'dirs' => true,
    ],
  ]
];