<?php
  $config = require __DIR__ . '/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $config['title'] ?></title>
    <link rel="stylesheet" href="<?= $config['tailwind'] ?>">
</head>
<body>
 <h1 class="text-4xl text-center mt-8"><?= $config['title'] ?></h1>
</body>
</html>