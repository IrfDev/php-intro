<?php

$users = $app['database']->selectAll('users');

require 'index.view.php';
