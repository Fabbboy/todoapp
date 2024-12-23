<?php
  $config = [
    'title' => 'Todo App',
    'db_path' => __DIR__ . '/../storage/todo.db',
    'propel_base_path' => __DIR__ . '/../propel',
    'public_path' => __DIR__ . '/../public',
    'tailwind' => '/styles/tailwind.css'
  ];

  require __DIR__ . '/../vendor/autoload.php';
  require $config['propel_base_path'] . '/generated-conf/config.php';

  return $config;
?>