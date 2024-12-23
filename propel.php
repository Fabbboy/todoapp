<?php
$config = include __DIR__ . '/src/config.php';

return [
    'propel' => [
        'database' => [
            'connections' => [
                'default' => [
                    'adapter'    => 'sqlite',
                    'classname'  => 'Propel\\Runtime\\Connection\\ConnectionWrapper',
                    'dsn'        => 'sqlite:' . $config['db_path'],
                    'user'       => '',
                    'password'   => '',
                    'attributes' => [],
                ],
            ],
        ],
        'paths' => [
          'schemaDir'    => __DIR__ . '/storage',
          'phpDir'       => $config['propel_base_path'] . '/generated-classes',
          'migrationDir' => $config['propel_base_path'] . '/migrations',
          'sqlDir'       => $config['propel_base_path'] . '/generated-sql', 
          'phpConfDir'    => $config['propel_base_path'] . '/generated-conf',
        ],
        'runtime' => [
            'defaultConnection' => 'default',
        ],
        'generator' => [
            'defaultConnection' => 'default',
        ],
    ],
];

?>