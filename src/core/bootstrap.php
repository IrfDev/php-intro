<?php

$config = require 'config.php';
require 'functions.php';
require 'core/database/QueryBuilder.php';
require 'core/database/Connection.php';
require 'core/routes/index.php';

return new QueryBuilder(
  Connection::make($config['database'])
);
