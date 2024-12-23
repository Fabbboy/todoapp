<?php
$config = require __DIR__ . '/config.php';
?>

<?php
use TodoApp\Models\TasksQuery;

$tasks = TasksQuery::create()->find();
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
  <main class="w-screen h-screen bg-neutral-800 p-4">
    <div class="flex flex-col items-center justify-start h-full">
      <header class="bg-neutral-900 text-neutral-100 p-4 rounded-lg w-full flex flex-row justify-between items-center">
        <h1 class="text-2xl"><?= $config['title'] ?></h1>
        <button class="bg-neutral-600 text-neutral-100 p-2 rounded-md" onclick="toggleCreateModal()">Create
          Todo</button>
      </header>

      <?php require __DIR__ . '/modal.php'; ?>

      <section class="flex flex-col items-center justify-start h-full p-8 w-full">
        <?php foreach ($tasks as $task): ?>
          <div
            class="flex flex-row w-2/3 rounded-md bg-neutral-600 p-4 mb-4 hover:bg-neutral-500 transition justify-between items-center">
            <a class="text-neutral-100 text-lg font-medium"><?php echo $task->getTitle() ?></a>
            <a class="text-gray-400 text-lg font-medium"><?php echo $task->getCreatedAt()->format('Y-m-d H:i:s') ?></a>
            <div class="flex flex-row items-center space-x-4">
              <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $task->getId() ?>">
                <button type="submit"
                  class="bg-red-600 text-neutral-100 py-2 px-4 rounded-md text-lg font-medium hover:bg-red-500 transition">Delete</button>
              </form>
            </div>
          </div>
        <?php endforeach; ?>
      </section>

    </div>
  </main>
</body>
<script>
  let showCreateModal = false;

  function toggleCreateModal() {
    showCreateModal = !showCreateModal;
    const modal = document.getElementById("create-modal");
    if (showCreateModal) {
      modal.classList.remove("hidden");
    } else {
      modal.classList.add("hidden");
    }
  }
</script>

</html>