<?php

$app['database']->insert('users', [
  'name' => $_POST['name'],
  'id' => random_int(0, 2000)
]);

header('Location: /');
